import React, {useState} from 'react';

const Settings = () => {
    const [logo,setLogo] =  useState({})
    let frame;

    const runUploader = (event) =>{
        event.preventDefault();

        if (frame){
            frame.open();
            return;
        }

        frame = wp.media({
            title: HTDData.t.frame_title,
            button: {
                text: HTDData.t.button_text
            },
            multiple: false
        }).on(`select`, function (){
            const attachment = frame.state().get('selection').first().toJSON();
            setLogo(attachment);
        });

        frame.open();

    }
    console.log(logo);
    return (
        <>
            <h2>{HTDData.t.theme_settings}</h2>
            <button type={'button'} onClick={runUploader}>
                {HTDData.t.add_logo}
            </button>

            {Object.keys(logo).length ? (
                <div>
                    <img src={logo.url} alt={logo.alt}/>
                </div>
            ):''}

        </>
    );
}

export default Settings;