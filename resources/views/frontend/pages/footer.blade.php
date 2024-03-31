<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<script>
    <?php
    if (@$_GET['move']) {
    ?>
    $('html,body').animate({
            scrollTop: $(".<?php echo $_GET['move']?>").offset().top},
        'slow');
    <?php
    }
    ?>

    const connectEthButton = document.querySelector(".connectEthButton");

    connectEthButton.addEventListener("click", async () => {
        accounts = await window.ethereum // Or window.ethereum if you don't support EIP-6963.
            .request({ method: "eth_requestAccounts" });
    });

    const connectEthButtonFooter = document.querySelector(".connectEthButtonFooter");

    if (connectEthButtonFooter) {
        connectEthButtonFooter.addEventListener("click", async () => {
            accounts = await window.ethereum // Or window.ethereum if you don't support EIP-6963.
                .request({ method: "eth_requestAccounts" });
            Toastify({
                text: "Coppied link invite success!",
            }).showToast();
        });
    }

    function checkNetWOrk() {
        // Kiểm tra xem MetaMask đã được kích hoạt và có sẵn không
        if (window.ethereum) {
            const provider = window.ethereum;

            // Lấy thông tin mạng hiện tại
            provider.request({ method: 'eth_chainId' })
                .then((chainId) => {
                    // Chuyển đổi chainId từ hex sang decimal
                    const chainIdDecimal = parseInt(chainId, 16);

                    // Log mạng hiện tại
                    console.log('Current network chainId:', chainId);
                    console.log('Current network decimal:', chainIdDecimal);

                    // Tùy thuộc vào mã chainId, bạn có thể so sánh để xác định mạng cụ thể
                    if (chainId === '0x1') {
                        console.log('Current network: Mainnet');
                    } else if (chainId === '0x3') {
                        console.log('Current network: Ropsten Testnet');
                    } else if (chainId === '0x4') {
                        console.log('Current network: Rinkeby Testnet');
                    } else if (chainId === '0x5') {
                        console.log('Current network: Goerli Testnet');
                    } else {
                        console.log('Current network: Unknown');
                    }
                })
                .catch((error) => {
                    console.error('Request error:', error);
                });
        } else {
            console.error('MetaMask is not installed!');
        }

    }
    setInterval(async () => {
        if (window.ethereum) {
            const selectedAddress = window.ethereum.selectedAddress;
            if (selectedAddress) {
                // checkNetWOrk()
                try {
                    // Yêu cầu quyền truy cập tài khoản từ MetaMask
                    await window.ethereum.request({ method: 'eth_requestAccounts' });

                    // Lấy địa chỉ tài khoản đã kết nối trong MetaMask
                    const accounts = await window.ethereum.request({ method: 'eth_accounts' });
                    const account = accounts[0];

                    let acc = account.substring(0,6) + '...' + account.substring(account.length - 6,account.length)

                    document.getElementById('account').textContent = acc;
                    document.getElementById('connectwallet').textContent = 'Connected';
                } catch (error) {
                    // console.error('Error fetching balance:', error);
                }
            } else {
                // console.log('MetaMask is installed but not connected to the website');
            }
        } else {
            // console.error('MetaMask is not installed!');
        }
    },300)
</script>
</body>
</html>
