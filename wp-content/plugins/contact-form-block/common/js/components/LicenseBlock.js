// React & Vendor Libs
const { useState, useEffect } = wp.element;

// NekoUI
import { NekoButton, NekoTypo, NekoBlock, NekoSettings, NekoInput, 
  NekoMessageDanger, NekoMessageSuccess, NekoModal } from '@neko-ui';
import { postFetch } from '@neko-ui';

// From Main Plugin
import { restUrl, prefix, domain, isPro, isRegistered, restNonce } from '@app/settings';

const CommonApiUrl = `${restUrl}/meow-licenser/${prefix}/v1`;

const LicenseBlock = () => {
  const [ busy, setBusy ] = useState(false);
  const [ currentModal, setCurrentModal ] = useState(null);
  const [ license, setLicense ] = useState(null);
  const [ serialKey, setSerialKey ] = useState('');
  const isOverridenLicense = isRegistered && (!license || license.license !== 'valid');

  const checkLicense = async () => {
    if (!isPro) {
      return;
    }
    setBusy(true);
    const res = await postFetch(`${CommonApiUrl}/get_license`, { nonce: restNonce });
    setLicense(res.data);
    if (res.data.key) {
      setSerialKey(res.data.key);
    }
    setBusy(false);
  }

  const removeLicense = async () => {
    setBusy(true);
    const res = await postFetch(`${CommonApiUrl}/set_license`, { nonce: restNonce, json: { serialKey: null } });
    if (res.success) {
      setSerialKey('');
      setLicense(null);
      setCurrentModal('licenseRemoved');
    }
    setBusy(false);
  }

  const validateLicense = async () => {
    setBusy(true);
    const res = await postFetch(`${CommonApiUrl}/set_license`, { nonce: restNonce, json: { serialKey } });
    if (res.success) {
      setLicense(res.data);
      if (res.data && !res.data.issue) {
        setCurrentModal('licenseAdded');
      }
    }
    setBusy(false);
  }

  useEffect(() => { checkLicense() }, []);

  const licenseTextStatus = isOverridenLicense ? 'Forced License' : isRegistered ? 'Enabled' : 'Disabled';

  const success = license && license.license === 'valid';
  let message = 'Your license is active. Thanks a lot for your support :)';
  if (!success) {
    if (!license) {
      message = 'Unknown error :(';
    }
    else if (license.issue === 'no_activations_left') {
      message = <span>There are no activations left for this license. You can visit your account at the <a target='_blank' rel="noreferrer" href='https://store.meowapps.com'>Meow Apps Store</a>, unregister a site, and click on <i>Retry to validate</i>.</span>;
    }
    else if (license.issue === 'expired') {
      message = <span>Your license has expired. You can get another license or renew the current one by visiting your account at the <a target='_blank' rel="noreferrer" href='https://store.meowapps.com'>Meow Apps Store</a>.</span>;
    }
    else if (license.issue === 'missing') {
      message = 'This license does not exist.';
    }
    else if (license.issue === 'disabled') {
      message = 'This license has been disabled.';
    }
    else if (license.issue === 'item_name_mismatch') {
      message = 'This license seems to be for a different plugin... isn\'t it? :)';
    }
    else {
      message = <span>There is an unknown error related to the system or this serial key. Really sorry about this! Make sure your security plugins and systems are off temporarily. If you are still experiencing an issue, please <a target='_blank' rel="noreferrer" href='https://meowapps.com/contact/'>contact us</a>.</span>
      console.error({ license });
    }
  }

  const jsxNonPro = 
    <NekoBlock title="Pro Version (Not Installed)" className="primary">
      You will find more information about the Pro Version <a target='_blank' rel="noreferrer" href={`https://store.meowapps.com`}>here</a>. If you actually bought the Pro Version already, please remove the current plugin and download the Pro Version from your account at the <a target='_blank' rel="noreferrer" href='https://store.meowapps.com/'>Meow Apps Store</a>.
    </NekoBlock>;

  const jsxProVersion = 
    <NekoBlock title={`Pro Version (${licenseTextStatus})`} busy={busy} className="primary">

      <NekoSettings title="Serial Key" style={{ fontWeight: 'bold' }}><NekoInput id="mfrh_pro_serial" 
        name="mfrh_pro_serial" disabled={busy} value={serialKey} onChange={(txt) => setSerialKey(txt)} placeholder="" />
      </NekoSettings>

      {license && !success && <NekoMessageDanger>{message}</NekoMessageDanger>}
      {license && success && <NekoMessageSuccess>{message}</NekoMessageSuccess>}

      {!license && <NekoTypo p>
        Insert your serial key above. If you don&apos;t have one yet, you can get one <a href="https://store.meowapps.com">here</a>. If there was an error during the validation, try the <i>Retry</i> to <i>validate</i> button.
        </NekoTypo>
      }

      <NekoSettings contentAlign="right">
        {license && !success && <NekoButton className="secondary" disabled={busy || !serialKey} 
          onClick={validateLicense}>Retry to validate
        </NekoButton>}
        {license && license.key === serialKey && <NekoButton className="secondary" disabled={busy || !serialKey} 
          onClick={removeLicense}>Remove License
        </NekoButton>}
        <NekoButton disabled={busy || !serialKey || (license && license.key === serialKey)} 
          onClick={validateLicense}>Validate License</NekoButton>
      </NekoSettings>

      <NekoModal
        isOpen={currentModal === 'licenseAdded'}
        title="Thank you :)"
        content="The Pro features have been enabled. This page should be now reloaded."
        ok='Reload'
        onOkClick={() => location.reload()}
      />

      <NekoModal
        isOpen={currentModal === 'licenseRemoved'}
        title="Goodbye :("
        content="The Pro features have been disabled. This page should be now reloaded."
        ok='Reload'
        onOkClick={() => location.reload()}
      />

    </NekoBlock>;

  return (isPro ? jsxProVersion : jsxNonPro);
};

export { LicenseBlock };
