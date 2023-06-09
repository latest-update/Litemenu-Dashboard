@php($id = Str::random(5))
<div id="editor_container_{{ $id }}" {{ $attributes }}>

    <script type="module">
        const { TABS, TOOLS } = FilerobotImageEditor;
        const config = {
            source: '{{ $imageToEdit }}',
            onSave: (editedImageObject, designState) => {
                console.log('saved', editedImageObject, designState);
                window.Livewire.emit('handleBase64Image{{ $alias }}', editedImageObject.imageBase64, editedImageObject.fullName)
            },
            annotationsCommon: {
                fill: '#fff',
            },
            Text: { text: 'Litemenu...' },
            Rotate: { angle: 90, componentType: 'slider' },
            translations: {
                profile: 'Profile',
                coverPhoto: 'Cover photo',
                facebook: 'Facebook',
                socialMedia: 'Social Media',
                fbProfileSize: '180x180px',
                fbCoverPhotoSize: '820x312px',
            },
            Crop: {
                presetsItems: [
                    {
                        titleKey: 'classicTv',
                        descriptionKey: '4:3',
                        ratio: 4 / 3,
                        // icon: CropClassicTv, // optional, CropClassicTv is a React Function component. Possible (React Function component, string or HTML Element)
                    },
                    {
                        titleKey: 'cinemascope',
                        descriptionKey: '21:9',
                        ratio: 21 / 9,
                        // icon: CropCinemaScope, // optional, CropCinemaScope is a React Function component.  Possible (React Function component, string or HTML Element)
                    },
                ],
                presetsFolders: [
                    {
                        titleKey: 'socialMedia', // will be translated into Social Media as backend contains this translation key
                        // icon: Social, // optional, Social is a React Function component. Possible (React Function component, string or HTML Element)
                        groups: [
                            {
                                titleKey: 'facebook',
                                items: [
                                    {
                                        titleKey: 'profile',
                                        width: 180,
                                        height: 180,
                                        descriptionKey: 'fbProfileSize',
                                    },
                                    {
                                        titleKey: 'coverPhoto',
                                        width: 820,
                                        height: 312,
                                        descriptionKey: 'fbCoverPhotoSize',
                                    },
                                ],
                            },
                        ],
                    },
                ],
            },
            tabsIds: [TABS.ADJUST, TABS.ANNOTATE, TABS.WATERMARK, TABS.FILTERS, TABS.FINETUNE, TABS.RESIZE], // or ['Adjust', 'Annotate', 'Watermark']
            defaultTabId: TABS.ANNOTATE, // or 'Annotate'
            defaultToolId: TOOLS.TEXT, // or 'Text'
        };

        // Assuming we have a div with id="editor_container"
        const filerobotImageEditor = new FilerobotImageEditor(
            document.querySelector('#editor_container_{{ $id }}'),
            config,
        );

        filerobotImageEditor.render({
            onClose: (closingReason) => {
                console.log('Closing reason', closingReason);
                // filerobotImageEditor.terminate();
            },
        });
    </script>
</div>
