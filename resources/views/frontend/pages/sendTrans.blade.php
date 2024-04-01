@include('frontend.pages.header')
    <div class="w-full pc" style="background-color: #000618;">
        @include('frontend.pages.headerPC')

        <div class="sendTrans w-full m-auto mt-[4.56rem] pb-[13rem]" data-aos="fade-up">
            <div class="tit text-center">
                PRIVATE SALE RACI TOKEN - BUY NOW !
            </div>
            <div class="time m-auto flex justify-between px-[3rem] mt-[4.25rem]" style="background: url('public/frontend/img/new/time.png');background-repeat: no-repeat; background-size: 100% 100%;">
                <div>
                    <div class="text-center text-[1.5rem]" id="DAYS"></div>
                    <div class="text-center mt-[1.5rem]">DAYS</div>
                </div>
                <div>
                    <div class="text-center text-[1.5rem] " id="HOURS"></div>
                    <div class="text-center mt-[1.5rem]">HOURS</div>
                </div>
                <div>
                    <div class="text-center text-[1.5rem] " id="MINUTES"></div>
                    <div class="text-center mt-[1.5rem]">MINUTES</div>
                </div>
                <div>
                    <div class="text-center text-[1.5rem] " id="SECONDS"></div>
                    <div class="text-center mt-[1.5rem]">SECONDS</div>
                </div>
            </div>
            <div
                    class="m-auto mt-[2.75rem] text-2xl text-center font-semibold text-white max-md:mt-10 max-md:max-w-full"
            >
                A total of 3,150,000 RACI tokens are available to be issued to early
                participants at RaciChain.com
            </div>
            <div class="fromTo">
                <div class="from">
                    <div class="name">
                        From
                    </div>
                    <div class="input" style="background: url('public/frontend/img/new/time.png');background-repeat: no-repeat; background-size: 100% 100%;">
                        <div class="total">
                            <input type="text" style="background: black" name="bnb" value="{{ @$_GET['bnb'] }}">
                        </div>
                        <img src="public/frontend/img/new/iconBNB.png" alt="">
                    </div>
                    <div class="balance">
                        Balance: <span id="balanceBNB"></span>
                    </div>
                </div>
                <div class="from">
                    <div class="name">
                        To
                    </div>
                    <div class="input" style="background: url('public/frontend/img/new/time.png');background-repeat: no-repeat; background-size: 100% 100%;">
                        <div class="total">
                            {{ @$_GET['raci'] }}
                        </div>
                        <img src="public/frontend/img/new/iconRc.png" alt="">
                    </div>
                    <div class="balance">
                        Balance: <span id="tokenBalance"></span>
                    </div>
                </div>
            </div>
            <div class="btnList">
                <div class="btnInvite">
                    <div class="cursor-pointer inviteLink" onclick="copyToClipboard()" link="">
                        MAKE YOUR LINK INVITE
                    </div>
                    <div class="cursor-pointer importToken">
                        IMPORT RACI TOKEN
                    </div>
                </div>
                <div class="btnBuy">
                    <div class="cursor-pointer sendEthButton">
                        BUY
                    </div>
                    <div class="mt-[1.37rem] cursor-pointer" id="account2">

                    </div>
                </div>
            </div>
        </div>
        <div class="section8 mt-[6.94rem] pb-[4rem]" style="background: url('public/frontend/img/new/bgfooter.png');background-repeat: no-repeat; background-size: 100% 100%;">
            <div class="flex h-[12.94rem] w-[71.5rem] m-auto justify-between items-center">
                <div class="flex gap-[2.94rem]">
                    <div class="text-white">Why $RACI</div>
                    <div class="text-white text-opacity-50">Trade</div>
                    <div class="text-white text-opacity-50">Tokenomics</div>
                    <div class="text-white text-opacity-50">FAQs</div>
                    <div class="font-bold bg-clip-text">BUY $RACI</div>
                </div>
                <div class="flex gap-[1rem] items-center">
                    <div class="w-max">Follow us</div>
                    <img src="{{ __BASE_URL__ }}/img/share.png" alt="">
                </div>
                <div class="btn">
                    Connect wallet
                </div>
            </div>
            <div
                    class="relative text-center py-2.5 pr-16 pl-28 text-sm font-bold bg-rose-700 rounded-[400px] text-slate-950 w-[111.75rem] m-auto"
            >
                Raci Chain 2024
            </div>
        </div>

    </div>
    <div class="w-full mobile" style="background: url('public/frontend/img/bgNetworkM.png');background-repeat: no-repeat; background-size: 100% 100%;">
        <div class="header flex justify-between items-center px-[1rem] py-[1rem]">
            <div class="langue flex items-center gap-[0.5rem]">
                EN
                <svg  class="w-[0.25rem] h-[0.125rem]" width="6" height="4" viewBox="0 0 6 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L3 3L5 1" stroke="white"/>
                </svg>
            </div>
            <div class="">
                <svg class="w-[3.40275rem] h-[3.75rem]" width="55" height="60" viewBox="0 0 55 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M30.6945 59.15L51.4747 47.343C53.4837 46.2054 54.7222 44.0952 54.7216 41.8109L54.7216 18.197C54.7384 15.9284 53.5317 13.8218 51.5526 12.6648L30.7724 0.85782C28.7632 -0.285941 26.2878 -0.285941 24.2786 0.857819L3.49841 12.6648C1.50327 13.8128 0.276794 15.9193 0.277526 18.197L0.277525 41.8109C0.260599 44.0728 1.4553 46.1758 3.42049 47.343L24.2007 59.15C26.2126 60.2833 28.6824 60.2833 30.6945 59.15Z" fill="url(#paint0_linear_26_489)"/>
                    <defs>
                        <linearGradient id="paint0_linear_26_489" x1="-47.6913" y1="8.32599" x2="-21.6567" y2="112.959" gradientUnits="userSpaceOnUse">
                            <stop offset="0.0401675" stop-color="#0194FE"/>
                            <stop offset="0.650747" stop-color="#5CD3E9"/>
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="openMenuM">
                <svg class="cursor-pointer w-[2.1875rem] h-[2.1875rem] cursor-pointer" width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="17.5" cy="17.5" r="17.5" fill="url(#paint0_linear_2006_4426)"/>
                    <g clip-path="url(#clip0_2006_4426)">
                        <path d="M10.9119 13.7058H24.0883C24.5911 13.7058 25 13.297 25 12.7942C25 12.2914 24.5911 11.8823 24.0884 11.8823H10.9119C10.4091 11.8823 10 12.2914 10 12.7942C10 13.297 10.4091 13.7058 10.9119 13.7058V13.7058Z" fill="white"/>
                        <path d="M24.0884 16.5881H10.9119C10.4091 16.5881 10 16.9972 10 17.5C10 18.0028 10.4091 18.4116 10.9119 18.4116H24.0883C24.5911 18.4116 25 18.0028 25 17.5C25 16.9972 24.5911 16.5881 24.0884 16.5881V16.5881Z" fill="white"/>
                        <path d="M24.0884 21.2939H10.9119C10.4091 21.2939 10 21.7032 10 22.206C10 22.7088 10.4091 23.1177 10.9119 23.1177H24.0883C24.5911 23.1177 25 22.7088 25 22.206C25 21.7032 24.5911 21.2939 24.0884 21.2939Z" fill="white"/>
                    </g>
                    <defs>
                        <linearGradient id="paint0_linear_2006_4426" x1="12.25" y1="63" x2="63.3353" y2="34.3201" gradientUnits="userSpaceOnUse">
                            <stop offset="0.0401675" stop-color="#0194FE"/>
                            <stop offset="0.650747" stop-color="#5CD3E9"/>
                        </linearGradient>
                        <clipPath id="clip0_2006_4426">
                            <rect width="15" height="15" fill="white" transform="translate(10 10)"/>
                        </clipPath>
                    </defs>
                </svg>
            </div>
        </div>
        <div class="menuMobile fixed w-full h-full flex justify-center items-center top-0 left-0 z-50" style="background: url('public/frontend/img/bg-menuM.png');background-repeat: no-repeat; background-size: 100% 100%; display: none">
            <div class="closeMenuM absolute top-[2rem] right-[1.5rem] cursor-pointer">
                <svg class="w-[2.1875rem] h-[2.1875rem]" xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                    <circle cx="17.5" cy="17.5" r="17.5" fill="url(#paint0_linear_2002_467)"/>
                    <path d="M24.9154 11.459L24.9154 11.459C25.2948 11.0793 25.2949 10.4641 24.9154 10.0846C24.5359 9.70513 23.9207 9.70513 23.5412 10.0846L10.0846 23.5412C9.70522 23.9206 9.70513 24.5356 10.0843 24.9151C10.2738 25.1059 10.5232 25.2004 10.7713 25.2004C11.0202 25.2004 11.2689 25.1044 11.4586 24.9158L11.459 24.9154L24.9154 11.459Z" fill="white" stroke="white" stroke-width="0.4"/>
                    <path d="M10.0846 11.459L10.0846 11.459L23.5417 24.915C23.5418 24.9151 23.5419 24.9152 23.542 24.9153C23.7315 25.1058 23.9806 25.2004 24.2288 25.2004C24.4769 25.2004 24.7254 25.1043 24.9149 24.9158L24.9154 24.9154C25.2949 24.5359 25.2949 23.9207 24.9154 23.5412L11.459 10.0846L11.459 10.0846C11.0793 9.70517 10.4641 9.7051 10.0846 10.0846C9.7051 10.4641 9.70517 11.0793 10.0846 11.459Z" fill="white" stroke="white" stroke-width="0.4"/>
                    <defs>
                        <linearGradient id="paint0_linear_2002_467" x1="12.25" y1="63" x2="63.3353" y2="34.3201" gradientUnits="userSpaceOnUse">
                            <stop offset="0.0401675" stop-color="#0194FE"/>
                            <stop offset="0.650747" stop-color="#5CD3E9"/>
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="flex flex-col gap-[2.19rem]">
                <div>
                    Page 1
                </div>
                <div>
                    Page 1
                </div>
                <div>
                    Page 1
                </div>
                <div>
                    Page 1
                </div>
            </div>
            <div class="absolute bottom-[1rem] w-full">
                <div class="listConnect m-auto">
                    <div class="connected">
                        Connected
                    </div>
                    <div class="connect">
                        Connect wallet
                    </div>
                </div>
            </div>
        </div>
        <div class="sectionM13 text-[1.5rem] font-bold text-center mt-[2.25rem] uppercase">
            Choose  PACKAGES
        </div>
        <div class="listPackage flex flex-wrap px-[1rem] gap-[1rem] mt-[2.12rem]">
            <div class="item cursor-pointer w-[8.0625rem] h-[12.4375rem] flex flex-col items-center" style="background: url('public/frontend/img/package1.png');background-repeat: no-repeat; background-size: 100% 100%;">
                <div class="name text-[0.875rem] font-semibold mt-[5.69rem]">
                    Binance Coin
                </div>
                <svg class="w-[3.75rem] h-[0.125rem] mt-[0.62rem] mb-[0.56rem]" width="60" height="2" viewBox="0 0 60 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 1C0 0.447715 0.447715 0 1 0H59C59.5523 0 60 0.447715 60 1V1C60 1.55228 59.5523 2 59 2H0.999999C0.447714 2 0 1.55228 0 1V1Z" fill="url(#paint0_linear_26_71)"/>
                    <defs>
                        <linearGradient id="paint0_linear_26_71" x1="32.2321" y1="2.52636" x2="34.694" y2="-21.315" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#EC94FA"/>
                            <stop offset="0.852811" stop-color="#A65DA8"/>
                        </linearGradient>
                    </defs>
                </svg>
                <div class="text-center text-[0.625rem] w-[5.3125rem]">
                    Smart contracts are simply programs stored
                </div>
            </div>
            <div class="item cursor-pointer w-[8.0625rem] h-[12.4375rem] flex flex-col items-center" style="background: url('public/frontend/img/package2.png');background-repeat: no-repeat; background-size: 100% 100%;">
                <div class="name text-[0.875rem] font-semibold mt-[5.69rem]">
                    Binance Coin
                </div>
                <svg class="w-[3.75rem] h-[0.125rem] mt-[0.62rem] mb-[0.56rem]" width="60" height="2" viewBox="0 0 60 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 1C0 0.447715 0.447715 0 1 0H59C59.5523 0 60 0.447715 60 1V1C60 1.55228 59.5523 2 59 2H0.999999C0.447714 2 0 1.55228 0 1V1Z" fill="url(#paint0_linear_26_71)"/>
                    <defs>
                        <linearGradient id="paint0_linear_26_71" x1="32.2321" y1="2.52636" x2="34.694" y2="-21.315" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#EC94FA"/>
                            <stop offset="0.852811" stop-color="#A65DA8"/>
                        </linearGradient>
                    </defs>
                </svg>
                <div class="text-center text-[0.625rem] w-[5.3125rem]">
                    Smart contracts are simply programs stored
                </div>
            </div>
            <div class="item cursor-pointer w-[8.0625rem] h-[12.4375rem] flex flex-col items-center" style="background: url('public/frontend/img/package3.png');background-repeat: no-repeat; background-size: 100% 100%;">
                <div class="name text-[0.875rem] font-semibold mt-[5.69rem]">
                    Binance Coin
                </div>
                <svg class="w-[3.75rem] h-[0.125rem] mt-[0.62rem] mb-[0.56rem]" width="60" height="2" viewBox="0 0 60 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 1C0 0.447715 0.447715 0 1 0H59C59.5523 0 60 0.447715 60 1V1C60 1.55228 59.5523 2 59 2H0.999999C0.447714 2 0 1.55228 0 1V1Z" fill="url(#paint0_linear_26_71)"/>
                    <defs>
                        <linearGradient id="paint0_linear_26_71" x1="32.2321" y1="2.52636" x2="34.694" y2="-21.315" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#EC94FA"/>
                            <stop offset="0.852811" stop-color="#A65DA8"/>
                        </linearGradient>
                    </defs>
                </svg>
                <div class="text-center text-[0.625rem] w-[5.3125rem]">
                    Smart contracts are simply programs stored
                </div>
            </div>
            <div class="item cursor-pointer w-[8.0625rem] h-[12.4375rem] flex flex-col items-center" style="background: url('public/frontend/img/package4.png');background-repeat: no-repeat; background-size: 100% 100%;">
                <div class="name text-[0.875rem] font-semibold mt-[5.69rem]">
                    Binance Coin
                </div>
                <svg class="w-[3.75rem] h-[0.125rem] mt-[0.62rem] mb-[0.56rem]" width="60" height="2" viewBox="0 0 60 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 1C0 0.447715 0.447715 0 1 0H59C59.5523 0 60 0.447715 60 1V1C60 1.55228 59.5523 2 59 2H0.999999C0.447714 2 0 1.55228 0 1V1Z" fill="url(#paint0_linear_26_71)"/>
                    <defs>
                        <linearGradient id="paint0_linear_26_71" x1="32.2321" y1="2.52636" x2="34.694" y2="-21.315" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#EC94FA"/>
                            <stop offset="0.852811" stop-color="#A65DA8"/>
                        </linearGradient>
                    </defs>
                </svg>
                <div class="text-center text-[0.625rem] w-[5.3125rem]">
                    Smart contracts are simply programs stored
                </div>
            </div>
        </div>
        <div class="sectionM13 text-[1.5rem] font-bold text-center mt-[2.25rem]">
            ABOUT BLOCKCHAINS
        </div>
        <div class="sectionM15 mt-[0.56rem] font-[600] px-[1rem]">
            <span class="text-[#01C3FD]">RACICHAIN</span> - is a smart contract constructor for tokens.
        </div>
        <div class="sectionM16 mt-[1rem] px-[1rem] text-[0.8125rem]">
            Everyday practice shows that constant outreach to our activities plays an important role in
        </div>
        <div class="sectionM17 mt-[1rem] px-[1rem] text-[0.8125rem]">
            shaping the learning system ensuring our activities plays an important role in shaping.
        </div>
        <div class="mt-[6rem]" style="background: url('public/frontend/img/borderBot.png');background-repeat: no-repeat; background-size: 100% 100%;">
            <div class="sectionM21 pt-[6.31rem]">
                <div class="w-[7.5625rem] h-[3.375rem] flex flex-wrap m-auto">
                    <div class="w-[50%] text-[0.875rem] text-[#FFF] opacity-[0.51]">Page 1</div>
                    <div class="w-[50%] text-[0.875rem] text-[#FFF] opacity-[0.51]">Page 1</div>
                    <div class="w-[50%] text-[0.875rem] text-[#FFF] opacity-[0.51]">Page 1</div>
                    <div class="w-[50%] text-[0.875rem] text-[#FFF] opacity-[0.51]">Page 1</div>
                </div>
                <div class="flex gap-[1rem] justify-center items-center mt-[1.37rem]">
                    <div class="text-[0.875rem]">
                        Follow us
                    </div>
                    <div class="">
                        <img src="{{ __BASE_URL__ }}/img/share.png" alt="">
                    </div>
                </div>
                <div class="">
                    <div class="sectionM3 mt-[2.75rem]">
                        Connect wallet
                    </div>
                </div>
            </div>
            <div class="sectionM22 mt-[1.94rem] text-center">
                © RACICHAIN 2024
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ __BASE_URL__ }}/js/slick.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script>
        AOS.init();
        $('.openMenuM').click(function () {
        $('.menuMobile').show()
        });
        $('.closeMenuM').click(function () {
        $('.menuMobile').hide()
        });

        let accounts = [];

        const tokenAddress = '0x8b2E3378f52E7bC58259C538D790B9EBE2063431';

        const sendEthButton = document.querySelector(".sendEthButton");
        // Send Ethereum to an address.
        sendEthButton.addEventListener("click", async () => {
            const provider = window.ethereum;

            // Lấy thông tin mạng hiện tại
            provider.request({ method: 'eth_chainId' })
                .then(async (chainId) => {
                    // Chuyển đổi chainId từ hex sang decimal
                    const chainIdDecimal = parseInt(chainId, 16);

                    // Log mạng hiện tại
                    // console.log('Current network chainId:', chainId);
                    // console.log('Current network decimal:', chainIdDecimal);

                    // Tùy thuộc vào mã chainId, bạn có thể so sánh để xác định mạng cụ thể
                    if (chainId === '0x38' || chainId === '0x61') {
                        let bnb = $('input[name="bnb"]').val()
                        const yourNumber = bnb * 1000000000000000000
                        accounts = await window.ethereum // Or window.ethereum if you don't support EIP-6963.
                            .request({ method: "eth_requestAccounts" });
                        window.ethereum // Or window.ethereum if you don't support EIP-6963.
                            .request({
                                method: "eth_sendTransaction",
                                // The following sends an EIP-1559 transaction. Legacy transactions are also supported.
                                params: [
                                    {
                                        // The user's active address.
                                        from: accounts[0],
                                        // Required except during contract publications.
                                        to: '0x978965bD0D23c17731832A402D925e0D420cb88D',
                                        // Only required to send ether to the recipient from the initiating external account.
                                        value: '0x' + yourNumber.toString(16),
                                        // Customizable by the user during MetaMask confirmation.
                                        gasLimit: '0x16345785D8A0000'
                                    },
                                ],
                            })
                            .then((txHash) => console.log(txHash))
                            .catch((error) => console.error(error));
                    } else {
                        Toastify({
                            text: "Plase chose NetWork: BNB Smart Chain!",
                            duration: 5000,
                            position: "center",
                        }).showToast();
                    }
                })
                .catch((error) => {
                    console.error('Request error:', error);
                });
        });
        function copyToClipboard() {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(".inviteLink").attr('link')).select();
            document.execCommand("copy");
            $temp.remove();
            Toastify({
                text: "Coppied link invite success!",
            }).showToast();
        }

        $('.importToken').click(async function() {
            const tokenSymbol = 'RACI';
            const tokenDecimals = 18;
            const tokenImage = '{{ __BASE_URL__ }}/img/new/logogg.png';

            try {
                // wasAdded is a boolean. Like any RPC method, an error may be thrown.
                const wasAdded = await window.ethereum.request({
                    method: 'wallet_watchAsset',
                    params: {
                        type: 'ERC20', // Initially only supports ERC20, but eventually more!
                        options: {
                            address: tokenAddress, // The address that the token is at.
                            symbol: tokenSymbol, // A ticker symbol or shorthand, up to 5 chars.
                            decimals: tokenDecimals, // The number of decimals in the token
                            image: tokenImage, // A string url of the token logo
                        },
                    },
                });

                if (wasAdded) {
                    console.log('Thanks for your interest!');
                } else {
                    console.log('Your loss!');
                }
            } catch (error) {
                console.log(error);
            }
        })

        function getBalaceRaci(accountAddress){
            const tokenContractAddress = tokenAddress;
            const tokenABI = [
                [{"inputs":[{"internalType":"uint256","name":"initialSupply","type":"uint256"}],"stateMutability":"nonpayable","type":"constructor"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"allowance","type":"uint256"},{"internalType":"uint256","name":"needed","type":"uint256"}],"name":"ERC20InsufficientAllowance","type":"error"},{"inputs":[{"internalType":"address","name":"sender","type":"address"},{"internalType":"uint256","name":"balance","type":"uint256"},{"internalType":"uint256","name":"needed","type":"uint256"}],"name":"ERC20InsufficientBalance","type":"error"},{"inputs":[{"internalType":"address","name":"approver","type":"address"}],"name":"ERC20InvalidApprover","type":"error"},{"inputs":[{"internalType":"address","name":"receiver","type":"address"}],"name":"ERC20InvalidReceiver","type":"error"},{"inputs":[{"internalType":"address","name":"sender","type":"address"}],"name":"ERC20InvalidSender","type":"error"},{"inputs":[{"internalType":"address","name":"spender","type":"address"}],"name":"ERC20InvalidSpender","type":"error"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"from","type":"address"},{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"}]            ];

            if (window.ethereum) {
                const web3 = new Web3(window.ethereum);

                // Tạo một đối tượng hợp đồng từ địa chỉ và ABI của token
                const tokenContract = new web3.eth.Contract(tokenABI, tokenContractAddress);

                console.log(1111,tokenContract,  tokenContract.balanceOf({ filter: { to: accountAddress } }));
                // Sử dụng phương thức balanceOf của hợp đồng token để lấy số dư của token
                tokenContract.balanceOf({ filter: { to: accountAddress } })
                    .on('data', event => {
                        console.log('Transfer event:', event);
                        // Cập nhật số dư token
                        document.getElementById('tokenBalance').textContent = event.returnValues.value;
                    })
                    .on('error', error => {
                        console.error('Transfer event error:', error);
                    });
                console.log(123321)
            } else {
                console.error('MetaMask is not installed!');
            }
        }
        setInterval(async () => {
            if (window.ethereum) {
                const selectedAddress = window.ethereum.selectedAddress;
                if (selectedAddress) {
                    try {
                        // Yêu cầu quyền truy cập tài khoản từ MetaMask
                        await window.ethereum.request({ method: 'eth_requestAccounts' });

                        // Lấy địa chỉ tài khoản đã kết nối trong MetaMask
                        const accounts = await window.ethereum.request({ method: 'eth_accounts' });
                        const account = accounts[0];

                        let acc = account.substring(0,6) + '...' + account.substring(account.length - 6,account.length)

                        $('.inviteLink').attr('link', "{{URL::to('/')}}/InviteCODE=" + account)

                        document.getElementById('account').textContent = acc;
                        document.getElementById('account2').textContent = acc;
                        document.getElementById('connectwallet').textContent = 'Connected';

                        // Khởi tạo Web3 provider từ MetaMask
                        const web3 = new Web3(window.ethereum);

                        // Lấy số dư của tài khoản đã chọn
                        const balance = await web3.eth.getBalance(account);

                        // Hiển thị thông tin tài khoản và số dư
                        document.getElementById('balanceBNB').textContent = `${web3.utils.fromWei(balance, 'ether')}`;
                        getBalaceRaci(account)
                    } catch (error) {
                        // console.error('Error fetching balance:', error);
                    }
                } else {
                    // console.log('MetaMask is installed but not connected to the website');
                }
            } else {
                // console.error('MetaMask is not installed!');
            }
        }, 300)
        // Set the date we're counting down to
        var countDownDate = new Date("May 5, 2024 15:37:25").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {
            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("DAYS").innerHTML = days ;

            document.getElementById("HOURS").innerHTML =hours;

            document.getElementById("MINUTES").innerHTML = minutes;

            document.getElementById("SECONDS").innerHTML = seconds;

            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
@include('frontend.pages.footer')
