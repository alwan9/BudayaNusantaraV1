{{-- <flowise-fullchatbot></flowise-fullchatbot> --}}
<script type="module" >
    import Chatbot from "https://cdn.jsdelivr.net/npm/flowise-embed/dist/web.js"
    Chatbot.init({
        chatflowid: "2d45c159-0c0c-42b3-8ec7-a74736f4bce9",
        apiHost: "http://localhost:3000",
        chatflowConfig: {
            /* Chatflow Config */
        },
        observersConfig: {
            /* Observers Config */
        },
        theme: {
            button: {
                backgroundColor: '#d96f18',
                right: 37,
                bottom: 100,
                size: 55,
                dragAndDrop: true,
                iconColor: 'white',
                customIconSrc: 'assets/karakter.png',
                // autoWindowOpen: {
                //     autoOpen: true,
                //     openDelay: 2,
                //     autoOpenOnMobile: false
                // }
            },
            tooltip: {
                showTooltip: true,
                tooltipMessage: 'Haii Pintar 👋!',
                tooltipBackgroundColor: 'black',
                tooltipTextColor: 'white',
                tooltipFontSize: 16
            },
            disclaimer: {
                title: 'Disclaimer',
                message: "By using this chatbot, you agree to the <a target=\"_blank\" href=\"https://flowiseai.com/terms\">Terms & Condition</a>",
                textColor: 'black',
                buttonColor: '#d96f18',
                buttonText: 'Start Chatting',
                buttonTextColor: 'white',
                blurredBackgroundColor: 'rgba(0, 0, 0, 0.4)',
                backgroundColor: 'white'
            },
            customCSS: ``,
            chatWindow: {
                showTitle: true,
                showAgentMessages: true,
                title: 'Sat Set Bot',
                titleAvatarSrc: 'assets/karakter.png',
                welcomeMessage: 'Haii!! Aku Chat Bot Budaya Sat Set...',
                errorMessage: 'Maaf saya tidak paham',
                backgroundColor: '#ffffff',
                backgroundImage: 'enter image path or link',
                height: 500,
                width: 400,
                fontSize: 16,
                starterPrompts: [
                    // "What is a bot?",
                    "Website ini berisi tentang apa?",
                    "Hubungi Admin?"
                ],
                starterPromptFontSize: 15,
                clearChatOnReload: false,
                sourceDocsTitle: 'Sources:',
                renderHTML: true,
                botMessage: {
                    backgroundColor: '#f7f8ff',
                    textColor: '#303235',
                    showAvatar: true,
                    avatarSrc: 'assets/karakter.png'
                },
                userMessage: {
                    backgroundColor: '#d96f18',
                    textColor: '#ffffff',
                    showAvatar: true,
                    avatarSrc: 'https://raw.githubusercontent.com/zahidkhawaja/langchain-chat-nextjs/main/public/usericon.png'
                },
                textInput: {
                    placeholder: 'Masukan Pertanyaan',
                    backgroundColor: '#ffffff',
                    textColor: '#303235',
                    sendButtonColor: '#d96f18',
                    maxChars: 50,
                    maxCharsWarningMessage: 'You exceeded the characters limit. Please input less than 50 characters.',
                    autoFocus: true,
                    sendMessageSound: true,
                    sendSoundLocation: 'send_message.mp3',
                    receiveMessageSound: true,
                    receiveSoundLocation: 'receive_message.mp3'
                },
                feedback: {
                    color: '#303235'
                },
                dateTimeToggle: {
                    date: true,
                    time: true
                },
                footer: {
                    textColor: '#d96f18',
                    text: 'Powered by',
                    company: 'Budaya Sat Set',
                    companyLink: 'https://flowiseai.com'
                }
            }
        }
    })
</script>
