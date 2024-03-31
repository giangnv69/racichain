<script setup>
    import { createWeb3Modal, defaultWagmiConfig } from '@web3modal/wagmi'

    import { mainnet, arbitrum } from 'viem/chains'
    import { reconnect, getAccount } from '@wagmi/core'

    // 1. Define constants
    const projectId = 'e82868519d9392ebb252ea98ba4d2587'

    // 2. Create wagmiConfig
    const metadata = {
        name: 'Web3Modal',
        description: 'Web3Modal Example',
        url: 'https://web3modal.com', // origin must match your domain & subdomain
        icons: ['https://avatars.githubusercontent.com/u/37784886']
    }

    const chains = [mainnet, arbitrum]
    const config = defaultWagmiConfig({
        chains, // required
        projectId, // required
        metadata, // required
        enableWalletConnect: true, // Optional - true by default
        enableInjected: true, // Optional - true by default
        enableEIP6963: true, // Optional - true by default
        enableCoinbase: true // Optional - true by default
    })

    reconnect(config)
    // 3. Create modal
    const modal = createWeb3Modal({
        wagmiConfig: config,
        projectId,
        enableAnalytics: true // Optional - defaults to your Cloud configuration
    })
    import { useSendTransaction } from 'wagmi'
    import { parseEther } from 'viem'
    function submit() {
        const { data: hash, sendTransaction } = useSendTransaction()
        const to = '0xba683238CF39DD63343D5E5F12F8aC752A80A6a9';
        const value = '100';
        sendTransaction({ to, value: parseEther(value) })
    }
</script>

<template>
    <div @click="submit()">
        send
    </div>
    <div @click="modal.open()"
         class="btnConnect cursor-pointer w-[23.375rem] h-[3rem] flex gap-5 justify-between items-center text-lg font-bold text-white rounded-3xl border-2 border-solid shadow-xl"
    >
        <div class="connect-wallet text-center h-full w-[10.75rem] pt-[0.5rem]">Connected</div>
        <div class="connect-wallet text-center h-full w-[10.75rem] pt-[0.5rem] active">
            Connect wallet
        </div>
    </div>
</template>