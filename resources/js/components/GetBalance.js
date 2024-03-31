import React, { useState } from 'react';
import Web3 from 'web3';

const GetBalance = () => {
    const [account, setAccount] = useState('');
    const [balance, setBalance] = useState('');

    const checkBalance = async () => {
        if (!window.ethereum) {
            console.error('MetaMask is not installed!');
            return;
        }

        try {
            // Kết nối với MetaMask
            await window.ethereum.request({ method: 'eth_requestAccounts' });

            // Lấy tất cả các tài khoản đã thêm vào MetaMask
            const accounts = await window.ethereum.request({ method: 'eth_accounts' });

            // Chọn tài khoản đầu tiên
            const selectedAccount = accounts[0];
            setAccount(selectedAccount);

            // Khởi tạo Web3 instance
            const web3 = new Web3(window.ethereum);

            // Lấy số dư của tài khoản đã chọn
            const balance = await web3.eth.getBalance(selectedAccount);
            setBalance(web3.utils.fromWei(balance, 'ether'));
        } catch (error) {
            console.error('Error fetching balance:', error);
        }
    };

    return (
        <div>
        <h2>MetaMask Balance</h2>
    <button onClick={checkBalance}>Check Balance</button>
    {account && <p>Account: {account}</p>}
        {balance && <p>Balance: {balance} ETH</p>}
        </div>
        );
};

export default GetBalance;
import { createRoot } from 'react-dom/client';
const container = document.getElementById('connectWallet');
const root = createRoot(container); // createRoot(container!) if you use TypeScript
root.render(<GetBalance tab="home" />);