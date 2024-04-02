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
                        Not Connect
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
<div class="w-full mobile" style="background: #000618;">
    @include('frontend.pages.headerM')
    <div class="sectionM5 w-full px-[1rem] mt-[3rem] mt-[6.63rem]" data-aos="fade-up">
        PRIVATE SALE RACI TOKEN <br> BUY NOW !
    </div>
    <div
            class="w-[15.375rem] m-auto mt-[1rem] text-[0.5rem] text-left font-semibold text-white"
    >
        A total of 3,150,000 RACI tokens are available to be issued to early
        participants at RaciChain.com
    </div>
    <div class="sendTransM w-full m-auto mt-[4.56rem] px-[2rem]" data-aos="fade-up">
        <div class="time m-auto flex justify-between px-[1.5rem] mt-[4.25rem]" style="background: url('public/frontend/img/new/time.png');background-repeat: no-repeat; background-size: 100% 100%;">
            <div>
                <div class="text-center text-[0.6rem]" id="DAYSM"></div>
                <div class="text-center mt-[0.5rem]">DAYS</div>
            </div>
            <div>
                <div class="text-center text-[0.6rem] " id="HOURSM"></div>
                <div class="text-center mt-[0.5rem]">HOURS</div>
            </div>
            <div>
                <div class="text-center text-[0.6rem] " id="MINUTESM"></div>
                <div class="text-center mt-[0.5rem]">MINUTES</div>
            </div>
            <div>
                <div class="text-center text-[0.6rem] " id="SECONDSM"></div>
                <div class="text-center mt-[0.5rem]">SECONDS</div>
            </div>
        </div>
        <div class="fromToM">
            <div class="from">
                <div class="input" style="background: url('public/frontend/img/new/time.png');background-repeat: no-repeat; background-size: 100% 100%;">
                    <div class="name">
                        From
                    </div>
                    <div class="total">
                        <input type="text" style="background: black" name="bnbM" value="{{ @$_GET['bnb'] }}">
                    </div>
                    <img src="public/frontend/img/new/iconBNB.png" alt="">
                </div>
                <div class="balance">
                    Balance: <span id="balanceBNB"></span>
                </div>
            </div>
            <div class="from">
                <div class="input" style="background: url('public/frontend/img/new/time.png');background-repeat: no-repeat; background-size: 100% 100%;">
                    <div class="name">
                        To
                    </div>
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
        <div class="btnListM">
            <div class="btnInvite">
                <div class="cursor-pointer importToken">
                    IMPORT RACI TOKEN
                </div>
                <div class="cursor-pointer inviteLink mt-[1rem]" onclick="copyToClipboard()" link="">
                    MAKE YOUR LINK INVITE
                </div>
            </div>
            <div class="btnBuy">
                <div class="cursor-pointer sendEthButtonM">
                    BUY
                </div>
                <div class="mt-[1.37rem] cursor-pointer" id="account2M">
                    Not Connect
                </div>
            </div>
        </div>
    </div>
    <div class="mt-[6rem]" style="background: url('public/frontend/img/new/bgFooterM.png');background-repeat: no-repeat; background-size: 100% 100%;">
        <div class="sectionM21 pt-[2.87rem] pb-[2rem]">
            <div class="w-[7.5625rem] m-auto">
                <div class="flex flex-col gap-[1.05rem] items-center">
                    <div class="text-white cursor-pointer" onclick="location.href='{{URL::to('/')}}?move=why-raciM';">Why $RACI</div>
                    <div class="text-white cursor-pointer text-opacity-50" onclick="location.href='{{URL::to('/')}}';">Trade</div>
                    <div class="text-white cursor-pointer text-opacity-50" onclick="location.href='{{URL::to('/')}}?move=tokenomicM';">Tokenomics</div>
                    <div class="text-white cursor-pointer text-opacity-50" onclick="location.href='{{URL::to('/')}}?move=faqM';">FAQs</div>
                    <div class="font-bold cursor-pointer bg-clip-text byRaci" onclick="location.href='{{URL::to('/')}}/buy-now';">BUY $RACI</div>
                </div>
            </div>
            <div class="flex gap-[1rem] justify-center items-center mt-[1.37rem]">
                <div class="text-[0.875rem]">
                    Follow us
                </div>
                <div class="flex gap-[0.5rem]">
                    <img class="w-[2rem]" src="{{ __BASE_URL__ }}/img/new/fb.png" alt="">
                    <img class="w-[2rem]" src="{{ __BASE_URL__ }}/img/new/ins.png" alt="">
                    <img class="w-[2rem]" src="{{ __BASE_URL__ }}/img/new//in.png" alt="">
                </div>
            </div>
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
            send('bnb')
        });

        const sendEthButtonM = document.querySelector(".sendEthButtonM");
        // Send Ethereum to an address.
        sendEthButtonM.addEventListener("click", async () => {
            send('bnbM')
        });
        function send(input) {
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
                        let bnb = $('input[name="' + input + '"]').val()
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
        }
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

        async function getBalaceRaci(accountAddress){
            const tokenContractAddress = tokenAddress;
            const tokenABI = [{"inputs":[{"internalType":"uint256","name":"initialSupply","type":"uint256"}],"stateMutability":"nonpayable","type":"constructor"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"allowance","type":"uint256"},{"internalType":"uint256","name":"needed","type":"uint256"}],"name":"ERC20InsufficientAllowance","type":"error"},{"inputs":[{"internalType":"address","name":"sender","type":"address"},{"internalType":"uint256","name":"balance","type":"uint256"},{"internalType":"uint256","name":"needed","type":"uint256"}],"name":"ERC20InsufficientBalance","type":"error"},{"inputs":[{"internalType":"address","name":"approver","type":"address"}],"name":"ERC20InvalidApprover","type":"error"},{"inputs":[{"internalType":"address","name":"receiver","type":"address"}],"name":"ERC20InvalidReceiver","type":"error"},{"inputs":[{"internalType":"address","name":"sender","type":"address"}],"name":"ERC20InvalidSender","type":"error"},{"inputs":[{"internalType":"address","name":"spender","type":"address"}],"name":"ERC20InvalidSpender","type":"error"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"from","type":"address"},{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"}];

            if (window.ethereum) {
                const web3 = new Web3(window.ethereum);

                // Tạo một đối tượng hợp đồng từ địa chỉ và ABI của token
                const tokenContract = new web3.eth.Contract(tokenABI, tokenContractAddress);

                // Sử dụng phương thức balanceOf của hợp đồng token để lấy số dư của token
                try {
                    // Gọi phương thức balanceOf của hợp đồng token và đợi kết quả
                    const balance = await tokenContract.methods.balanceOf(accountAddress).call();
                    document.getElementById('tokenBalance').textContent = balance / 1000000000000000000;
                } catch (error) {
                    // console.error('Error:', error);
                }

            } else {
                // console.error('MetaMask is not installed!');
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
                        document.getElementById('accountM').textContent = acc;
                        document.getElementById('account2M').textContent = acc;
                        document.getElementById('connectwalletM').textContent = 'Connected';

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
        }, 500)
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
            document.getElementById("DAYSM").innerHTML = days ;

            document.getElementById("HOURSM").innerHTML =hours;

            document.getElementById("MINUTESM").innerHTML = minutes;

            document.getElementById("SECONDSM").innerHTML = seconds;
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
