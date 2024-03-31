<div class="header w-full px-[7rem] py-[3rem]">
    <div
            class="flex gap-5 justify-between items-center"
    >
        <div class="flex gap-[2.25rem] items-center">
            <img class="cursor-pointer" onclick="location.href='{{URL::to('/')}}';" src="{{ __BASE_URL__ }}/img/new/logo.png" alt="">
            <div class="flex gap-[2.94rem] items-center">
                <div class="text-white cursor-pointer">Why $RACI</div>
                <div class="text-white cursor-pointer text-opacity-50">Trade</div>
                <div class="text-white cursor-pointer text-opacity-50">Tokenomics</div>
                <div class="text-white cursor-pointer text-opacity-50">FAQs</div>
                <div class="font-bold cursor-pointer bg-clip-text byRaci" onclick="location.href='{{URL::to('/')}}/buy-now';">BUY $RACI</div>
            </div>
        </div>
        <div
                class="connectEthButton btnConnect cursor-pointer w-[23.375rem] h-[3rem] flex gap-5 justify-between items-center text-lg font-bold text-white rounded-3xl border-2 border-solid shadow-xl"
        >
            <div class="connect-wallet text-center h-full w-[10.75rem] pt-[0.5rem]" id="account">Connected</div>
            <div class="connect-wallet text-center h-full w-[10.75rem] pt-[0.5rem] active" id="connectwallet">
                Connect wallet
            </div>
        </div>
    </div>
</div>
