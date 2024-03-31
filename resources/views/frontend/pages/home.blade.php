@include('frontend.pages.header')
{{--<div class="w-full pc" style="background: url('public/frontend/img/Home.jpg');background-repeat: no-repeat; background-size: 100% 100%;">--}}
    <div class="w-full pc" style="background-color: #000618;">
        @include('frontend.pages.headerPC')
        <div class="section1 h-[34.5rem] flex w-[71.5rem] m-auto mt-[9.5rem]" data-aos="fade-up">
            <div class="w-[44.6rem] ">
                <div class="tit">
                    <img class="w-[44.5625rem]  h-[6rem]" width="44.5625rem" height="6rem" src="{{ __BASE_URL__ }}/img/new/racichain.png" alt="">
                </div>
                <div class="desc">
                    Raci is a revolutionary project at the forefront of financial innovation. Our mission is to redefine how individuals engage with cryptocurrency trading by leveraging the power of Artificial Intelligence (AI). At the core of Raci's values lies a commitment to accessibility, security, and profitability for our users. RaciChain is the world's largest blockchain and cryptocurrency encyclopedia with thousands of wikis on all topics and branches of knowledge in the crypto space.
                </div>
                <div class="btn cursor-pointer" onclick="location.href='buy-now';">
                    BUY NOW
                </div>
            </div>
            <div id="lottie" class="w-30%">

            </div>
        </div>
        <div class="section2 h-[29rem] flex gap-[3.5rem] w-[71.5rem] m-auto mt-[10.4rem]" data-aos="fade-up">
            <div class="smart_contract flex flex-col justify-between items-center" style="width: 25.5rem; height: 28.875rem; background: url('public/frontend/img/new/bgtoken.png');background-repeat: no-repeat; background-size: 100%;" >
                <div class="name text-center pt-[4rem]">
                    Smart contract #1
                </div>
                <div class="btn mb-[2.5rem] cursor-pointer" data-aos="fade-up">
                    Connect wallet
                </div>
            </div>
            <div class="about w-[43rem]">
                <div class="tit">
                    About company
                </div>
                <div class="desc mt-[3.19rem]">
                    Welcome to RaciChain, where innovation meets opportunity in the world of AI-driven trading. $RACI is more than a platform; it's a vision realized, a community of forward-thinkers, and a catalyst for positive change in the cryptocurrency landscape.
                    <div class="h-[2.12rem]"></div>
                    For full transparency, every edit on RaciChain is recorded on the Polygon blockchain and Binance Labs with the transaction hash stored on-chain. The data and images uploaded as part of each wiki are stored on the IPFS network and the hashes are included on each page for the users to verify.
                </div>
            </div>
        </div>
        <div class="mt-[10.5rem] w-[106.5625rem] h-[50.5rem] m-auto rounded-[50px] overflow-hidden" style="border-radius: 50px;background: rgba(43, 101, 150, 0.27);backdrop-filter: blur(25px);">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                    {
                        "width": "100%",
                        "height": "100%",
                        "defaultColumn": "overview",
                        "screener_type": "crypto_mkt",
                        "displayCurrency": "BTC",
                        "colorTheme": "dark",
                        "locale": "en",
                        "isTransparent": true
                    }
                </script>
            </div>
            <!-- TradingView Widget END -->
        </div>
        <div class="section3 w-[71.3125rem] m-auto mt-[19.12rem]">
            <div class="head flex justify-center" data-aos="fade-up">
                <div class="tit">
                    What Sets Us Apart?
                </div>
            </div>
            <div class="list-works flex justify-center w-full h-[28.1875rem] mt-[3.94rem]">
                <div class="item flex flex-col items-center p-[2rem] w-[33%]" data-aos="fade-up">
                    <div class="number relative flex justify-center items-center">
                        <div class="select flex justify-center items-center">
                            1
                        </div>
                    </div>
                    <div class="tit">
                        Technological Excellence
                    </div>
                    <div class="desc">
                        RaciChain stands on the forefront of technological excellence, leveraging advanced AI to craft exclusive trading strategies and innovative features.
                    </div>
                </div>
                <div class="item flex flex-col items-center p-[2rem] w-[33%]" data-aos="fade-up">
                    <div class="number relative flex justify-center items-center">
                        <div class="select flex justify-center items-center">
                            2
                        </div>
                    </div>
                    <div class="tit">
                        User-Centric Approach
                    </div>
                    <div class="desc">
                        We prioritize our users, providing a user-friendly interface, educational resources, and customization options to ensure every trader can thrive in our ecosystem.
                    </div>
                </div>
                <div class="item flex flex-col items-center p-[2rem] w-[33%]" data-aos="fade-up">
                    <div class="number relative flex justify-center items-center">
                        <div class="select flex justify-center items-center">
                            3
                        </div>
                    </div>
                    <div class="tit">
                        Community Collaboration
                    </div>
                    <div class="desc">
                        RaciChain is more than a platform, it's a community. Collaborative development, decentralized governance, and user empowerment define our approach to building a vibrant ecosystem.
                    </div>
                </div>
            </div>
        </div>
        <div class="section4 relative flex flex-col w-full items-center m-auto mt-[9rem]">
            <div class="absolute top-[6rem] left-0 w-full px-[4rem]" data-aos="fade-up">
                <img class="w-full" src="{{ __BASE_URL__ }}/img/new/bgtokenomic.png" alt="">
            </div>
            <div
                    class="self-center text-6xl font-bold text-pink-600 uppercase" data-aos="fade-up"
            >
                Tokenomics
            </div>
            <div
                    class="text-token mt-[6.94rem]  w-[99.375rem] h-[22rem]" data-aos="fade-up"
            >
                RaciChain stands on the forefront of technological excellence, leveraging
                advanced AI to craft exclusive trading strategies and innovative features.
                User-Centric Approach
                <br />
                We prioritize our users, providing a user-friendly interface, educational
                resources, and customization options to ensure every trader can thrive in our
                ecosystem.
                <br />
                Community Collaboration
                <br />
                RaciChain is more than a platform, it's a community. Collaborative
                development, decentralized governance, and user empowerment define our
                approach to building a vibrant ecosystem.
            </div>

        </div>
        <div class="w-[96.3125rem] h-[48.73188rem] m-auto" data-aos="fade-up">
            <img class="w-full" src="{{ __BASE_URL__ }}/img/new/token.png" alt="">
        </div>
        <div class="section4 flex flex-col items-center w-[99.375rem] m-auto mt-[9.52rem]">
            <div
                    class="self-center text-6xl font-bold text-pink-600 uppercase max-md:mt-10 max-md:text-4xl" data-aos="fade-up"
            >
                Earn Profits With RACI
            </div>
            <div class="mt-[7.62rem] w-full max-md:max-w-full">
                <div class="flex gap-5 max-md:flex-col max-md:gap-0" data-aos="fade-up">
                    <div class="flex flex-col w-6/12 max-md:ml-0 max-md:w-full">
                        <div
                                class="flex flex-col grow px-5 pb-20 mt-8 text-3xl leading-10 text-white w-[38.375rem]"
                        >
                            <div
                                    class="text-3xl font-semibold leading-10 max-md:max-w-full h-[13.125rem]"
                            >
                                <span class="text-rose-500">20%</span>
                                <span class="">of</span>
                                <span class="text-rose-500 uppercase">RACI</span>
                                <span class="">
            profits are distributed by RACI holders through our
          </span>
                                <span class="text-rose-500">smart contract.</span>
                            </div>
                            <div class="mt-4 h-[9.8125rem]">
                                It is accepted as a payment for the service, and also distributes the
                                company's profits among the leaders.
                            </div>
                            <div class="mt-4">
                                All tokens accepted as payment are burned and withdrawn from
                                circulation.
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col ml-5 w-6/12 max-md:ml-0 max-md:w-full">
                        <div id="animProfit">

                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div
                class="mt-[21.44rem] text-5xl font-bold text-pink-600 text-center" data-aos="fade-up"
        >
            RACI CHAIN TEAM
        </div>
        <div class="section7 relative w-[71.5rem] m-auto mt-[3.87rem]" data-aos="fade-up">
            <div class="listteam slideImgDeva slider mt-[3.75rem]">
                <div class="item relative">
                    <img class="absolute w-full h-full" src="{{ __BASE_URL__ }}/img/new/bgteam.png" alt="">
                    <div class="info absolute w-full flex flex-col items-center">
                        <img class="w-[16.9375rem] h-[14.375rem] object-cover rounded-[2rem] mt-[2.37rem]" src="{{ __BASE_URL__ }}/img/new/team1.png" alt="">
                        <div class="tit">
                            Kevin Wang
                        </div>
                        <div class="job">
                            CEO and Project Lead
                        </div>
                    </div>
                </div>
                <div class="item relative">
                    <img class="absolute w-full h-full" src="{{ __BASE_URL__ }}/img/new/bgteam.png" alt="">
                    <div class="info absolute w-full flex flex-col items-center">
                        <img class="w-[16.9375rem] h-[14.375rem] object-cover rounded-[2rem] mt-[2.37rem]" src="{{ __BASE_URL__ }}/img/new/team2.png" alt="">
                        <div class="tit">
                            Theodor Forselius
                        </div>
                        <div class="job">
                            Co-Fouder
                        </div>
                    </div>
                </div>
                <div class="item relative">
                    <img class="absolute w-full h-full" src="{{ __BASE_URL__ }}/img/new/bgteam.png" alt="">
                    <div class="info absolute w-full flex flex-col items-center">
                        <img class="w-[16.9375rem] h-[14.375rem] object-cover rounded-[2rem] mt-[2.37rem]" src="{{ __BASE_URL__ }}/img/new/team3.png" alt="">
                        <div class="tit">
                            Andy Cho
                        </div>
                        <div class="job">
                            CTO and Technology Lead
                        </div>
                    </div>
                </div>
                <div class="item relative">
                    <img class="absolute w-full h-full" src="{{ __BASE_URL__ }}/img/new/bgteam.png" alt="">
                    <div class="info absolute w-full flex flex-col items-center">
                        <img class="w-[16.9375rem] h-[14.375rem] object-cover rounded-[2rem] mt-[2.37rem]" src="{{ __BASE_URL__ }}/img/new/team4.png" alt="">
                        <div class="tit">
                            Roberto Doberscu
                        </div>
                        <div class="job">
                            Marketing and Community
                        </div>
                    </div>
                </div>
            </div>
            <div class="prevS absolute cursor-pointer top-[14rem] left-[-4rem]">
                <img class="w-[3.6875rem]" src="{{ __BASE_URL__ }}/img/new/next.png" alt="">
            </div>
            <div class="nextS absolute cursor-pointer top-[14rem] right-[-4rem]">
                <img class="w-[3.6875rem]" src="{{ __BASE_URL__ }}/img/new/prev.png" alt="">
            </div>
        </div>
        <div data-aos="fade-up">
            <svg class="w-full mt-[11rem]" width="1967" height="1" viewBox="0 0 1967 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line y1="0.5" x2="1967" y2="0.5" stroke="white"/>
            </svg>
        </div>
        <div class="mt-[5rem] text-5xl font-bold text-white text-center" data-aos="fade-up">
            Our Partners
        </div>
        <div class="section7 relative h-[3.75344rem] w-[71.5rem] m-auto mt-[3.87rem]">
            <div class=" slideOur slider mt-[3.75rem]">
                <div class="item">
                    <img class="m-auto" src="{{ __BASE_URL__ }}/img/new/our1.png" alt="">
                </div>
                <div class="item">
                    <img class="m-auto" src="{{ __BASE_URL__ }}/img/new/our2.png" alt="">
                </div>
                <div class="item">
                    <img class="m-auto" src="{{ __BASE_URL__ }}/img/new/our3.png" alt="">
                </div>
                <div class="item">
                    <img class="m-auto" src="{{ __BASE_URL__ }}/img/new/our4.png" alt="">
                </div>
                <div class="item">
                    <img class="m-auto" src="{{ __BASE_URL__ }}/img/new/our5.png" alt="">
                </div>
                <div class="item">
                    <img class="m-auto" src="{{ __BASE_URL__ }}/img/new/our6.png" alt="">
                </div>
                <div class="item">
                    <img class="m-auto" src="{{ __BASE_URL__ }}/img/new/our7.png" alt="">
                </div>
            </div>
        </div>
        <div class="mt-[12.16rem] text-[3.25rem] font-bold text-white text-center" data-aos="fade-up">
            Frequently Asked Questions
        </div>
        <div class="listQA mt-[1.5rem] w-[47.0625rem] m-auto">
            <div class="item" data-aos="fade-up">
                <div class="name">
                    What distinguishes RaciChain from other trading platforms?
                </div>
                <div class="desc hidden">
                    RACI   stands out with its AI-driven Bot Trading, offering users automated and   optimized trading strategies. The platform's emphasis on innovation,   technology, and financial empowerment sets it apart.
                </div>
                <svg class="mt-[1.16rem] w-full" width="753" height="1" viewBox="0 0 753 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line y1="0.5" x2="753" y2="0.5" stroke="white"/>
                </svg>
                <svg class="btnShow cursor-pointer w-[1.5625rem] h-[2.8125rem]" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.26562 17.3381V0.0539763H10.7045V17.3381H7.26562ZM0.349432 10.4091V6.97017H17.6335V10.4091H0.349432Z" fill="white"/>
                </svg>
            </div>
            <div class="item" data-aos="fade-up">
                <div class="name">
                    How does RACI's AI-powered Bot Trading work?
                </div>
                <div class="desc hidden">
                    RACI's AI-driven Bot Trading uses advanced algorithms for swift   market data analysis and timely trading decisions. Users benefit from   high-speed processing, accuracy, adaptability, and risk minimization.                     </div>
                <svg class="mt-[1.16rem] w-full" width="753" height="1" viewBox="0 0 753 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line y1="0.5" x2="753" y2="0.5" stroke="white"/>
                </svg>
                <svg class="btnShow cursor-pointer w-[1.5625rem] h-[2.8125rem]" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.26562 17.3381V0.0539763H10.7045V17.3381H7.26562ZM0.349432 10.4091V6.97017H17.6335V10.4091H0.349432Z" fill="white"/>
                </svg>
            </div>
            <div class="item" data-aos="fade-up">
                <div class="name">
                    What is the role of the RACI token?
                </div>
                <div class="desc hidden">
                    The $RACI token is integral to the RaciChain ecosystem, enabling   the purchase of Bot Auto Trading, staking, earning rewards from trading   profits, and participating in decentralized governance Web   3 Binance for algorithm adjustments.
                </div>
                <svg class="mt-[1.16rem] w-full" width="753" height="1" viewBox="0 0 753 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line y1="0.5" x2="753" y2="0.5" stroke="white"/>
                </svg>
                <svg class="btnShow cursor-pointer w-[1.5625rem] h-[2.8125rem]" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.26562 17.3381V0.0539763H10.7045V17.3381H7.26562ZM0.349432 10.4091V6.97017H17.6335V10.4091H0.349432Z" fill="white"/>
                </svg>
            </div>
            <div class="item" data-aos="fade-up">
                <div class="name">
                    What features distinguish RACI's trading platform?
                </div>
                <div class="desc hidden">
                    RACI's platform boasts AI-driven trading strategies, a   decentralized exchange (Dex) for enhanced security, and a commitment to   optimizing trading with cutting-edge technology.
                </div>
                <svg class="mt-[1.16rem] w-full" width="753" height="1" viewBox="0 0 753 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line y1="0.5" x2="753" y2="0.5" stroke="white"/>
                </svg>
                <svg class="btnShow cursor-pointer w-[1.5625rem] h-[2.8125rem]" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.26562 17.3381V0.0539763H10.7045V17.3381H7.26562ZM0.349432 10.4091V6.97017H17.6335V10.4091H0.349432Z" fill="white"/>
                </svg>
            </div>
            <div class="item" data-aos="fade-up">
                <div class="name">
                    How secure is the RaciChain platform?
                </div>
                <div class="desc hidden">
                    RACI prioritizes security, implementing a comprehensive set of   measures to safeguard against potential threats and provide users with a   secure trading environment.The project is sponsored by Shentu   Chain. The predecessor was CertiK
                </div>
                <svg class="mt-[1.16rem] w-full" width="753" height="1" viewBox="0 0 753 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line y1="0.5" x2="753" y2="0.5" stroke="white"/>
                </svg>
                <svg class="btnShow cursor-pointer w-[1.5625rem] h-[2.8125rem]" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.26562 17.3381V0.0539763H10.7045V17.3381H7.26562ZM0.349432 10.4091V6.97017H17.6335V10.4091H0.349432Z" fill="white"/>
                </svg>
            </div>
            <div class="item" data-aos="fade-up">
                <div class="name">
                    What is the utility of $RACI token?
                </div>
                <div class="desc hidden">
                    The $RACI token is versatile, allowing users to purchase Bot   Auto Trading, stake for rewards, delegate to the Binance Lab, Polygon (Matic)   and Dao for adjustments, and participate in the RaciChain ecosystem.                 </div>
                <svg class="mt-[1.16rem] w-full" width="753" height="1" viewBox="0 0 753 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line y1="0.5" x2="753" y2="0.5" stroke="white"/>
                </svg>
                <svg class="btnShow cursor-pointer w-[1.5625rem] h-[2.8125rem]" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.26562 17.3381V0.0539763H10.7045V17.3381H7.26562ZM0.349432 10.4091V6.97017H17.6335V10.4091H0.349432Z" fill="white"/>
                </svg>
            </div>
            <div class="item" data-aos="fade-up">
                <div class="name">
                    What trading strategies does RaciChain use?
                </div>
                <div class="desc hidden">
                    Just like Space ID, $RACI utilizes Data Science and Statistics   & Probability to enhance trading strategies, ensuring correct results,   high processing speed, and diverse asset management.
                </div>
                <svg class="mt-[1.16rem] w-full" width="753" height="1" viewBox="0 0 753 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line y1="0.5" x2="753" y2="0.5" stroke="white"/>
                </svg>
                <svg class="btnShow cursor-pointer w-[1.5625rem] h-[2.8125rem]" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.26562 17.3381V0.0539763H10.7045V17.3381H7.26562ZM0.349432 10.4091V6.97017H17.6335V10.4091H0.349432Z" fill="white"/>
                </svg>
            </div>
            <div class="item" data-aos="fade-up">
                <div class="name">
                    How can users embark on their journey with RaciChain?
                </div>
                <div class="desc hidden">
                    Users can start their journey by exploring RaciChain.com   innovative features. Beginners have access to educational materials, user   guides, and a supportive community.                       </div>
                <svg class="mt-[1.16rem] w-full" width="753" height="1" viewBox="0 0 753 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line y1="0.5" x2="753" y2="0.5" stroke="white"/>
                </svg>
                <svg class="btnShow cursor-pointer w-[1.5625rem] h-[2.8125rem]" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.26562 17.3381V0.0539763H10.7045V17.3381H7.26562ZM0.349432 10.4091V6.97017H17.6335V10.4091H0.349432Z" fill="white"/>
                </svg>
            </div>
            <div class="item" data-aos="fade-up">
                <div class="name">
                    What advantages does it offer?
                </div>
                <div class="desc hidden">
                    RaciChain's Dex revolutionizes the trading experience with   enhanced security, transparency, and user control over assets, providing an   overview of its key features.                  </div>
                <svg class="mt-[1.16rem] w-full" width="753" height="1" viewBox="0 0 753 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line y1="0.5" x2="753" y2="0.5" stroke="white"/>
                </svg>
                <svg class="btnShow cursor-pointer w-[1.5625rem] h-[2.8125rem]" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.26562 17.3381V0.0539763H10.7045V17.3381H7.26562ZM0.349432 10.4091V6.97017H17.6335V10.4091H0.349432Z" fill="white"/>
                </svg>
            </div>
            <div class="item" data-aos="fade-up">
                <div class="name">
                    How does $RACI leverage Machine Learning to enhance Bot Trading?
                </div>
                <div class="desc hidden">
                    The updated Machine Learning upgrade strengthens BitDail Bot   Trading, using Data Science and Statistics & Probability to optimize   trading strategies and shape the future of smart trading.                </div>
                <svg class="mt-[1.16rem] w-full" width="753" height="1" viewBox="0 0 753 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line y1="0.5" x2="753" y2="0.5" stroke="white"/>
                </svg>
                <svg class="btnShow cursor-pointer w-[1.5625rem] h-[2.8125rem]" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.26562 17.3381V0.0539763H10.7045V17.3381H7.26562ZM0.349432 10.4091V6.97017H17.6335V10.4091H0.349432Z" fill="white"/>
                </svg>
            </div>
        </div>
        <div class="btnInvite m-auto mt-[4.44rem]" data-aos="fade-up">
            MAKE YOUR LINK INVITE
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
    <div class="w-full mobile" style="background: url('public/frontend/img/HomeMobile.png');background-repeat: no-repeat; background-size: 100% 100%;">
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
        <div class="sectionM1">
            RACICHAIN
        </div>
        <div class="sectionM2 px-[1rem] mt-[2.44rem] h-[2.0625rem]">
            Raci is a revolutionary project at the forefront of financial innovation.
        </div>
        <div class="sectionM3 mt-[19.44rem] cursor-pointer" onclick="window.open('buy-now').focus();">
            BUY NOW
        </div>
        <div class="sectionM4 w-[17.4375rem] h-[19.75rem] m-auto mt-[4.19rem] relative">
            <img class="w-full absolute" src="public/frontend/img/smartcontract4.png" alt="">
            <div class="w-full absolute h-full flex flex-col items-center justify-between p-[2rem]">
                <div class="tit">
                    Smart contract #1
                </div>
                <div class="btn cursor-pointer">
                    ConnectWallet
                </div>
            </div>
        </div>
        <div class="sectionM5 px-[1rem] mt-[2.36rem]">
            About company
        </div>
        <div class="sectionM6 px-[1rem] mt-[0.58rem] h-[16rem] flex flex-col gap-[1.25rem]">
            <div>
                Everyday practice shows that the constant information and propaganda support of our activities plays an important role in shaping the personnel training system and meets urgent needs.
            </div>
            <div>
                Everyday practice shows that the constant information and propaganda support of our activities plays an important role in shaping the personnel training system and meets urgent needs.
            </div>
            <div>
                <span>smart - contract</span> - is a decentralized blockchain application.
            </div>
        </div>
        <div class="sectionM7 px-[1rem] mt-[4.06rem]">
            HOW IT <strong>WORKS</strong>
        </div>
        <div class="sectionM8 mx-[1rem] mt-[1.06rem] p-[1rem] h-[86.6875rem] flex flex-col justify-between">
            <div class="flex flex-col items-center">
                <img class="w-[5.84363rem] h-[6.9785rem]" src="public/frontend/img/work1.png" alt="">
                <div class="name">Everyday practice</div>
                <div class="desc">Everyday practice shows that the constant propaganda support of our activities plays an important role in the system.</div>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-[5.84363rem] h-[6.9785rem]" src="public/frontend/img/work2.png" alt="">
                <div class="name">Everyday practice</div>
                <div class="desc">Everyday practice shows that the constant propaganda support of our activities plays an important role in the system.</div>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-[5.84363rem] h-[6.9785rem]" src="public/frontend/img/work3.png" alt="">
                <div class="name">Everyday practice</div>
                <div class="desc">Everyday practice shows that the constant propaganda support of our activities plays an important role in the system.</div>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-[5.84363rem] h-[6.9785rem]" src="public/frontend/img/work4.png" alt="">
                <div class="name">Everyday practice</div>
                <div class="desc">Everyday practice shows that the constant propaganda support of our activities plays an important role in the system.</div>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-[5.84363rem] h-[6.9785rem]" src="public/frontend/img/work5.png" alt="">
                <div class="name">Everyday practice</div>
                <div class="desc">Everyday practice shows that the constant propaganda support of our activities plays an important role in the system.</div>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-[5.84363rem] h-[6.9785rem]" src="public/frontend/img/work6.png" alt="">
                <div class="name">Everyday practice</div>
                <div class="desc">Everyday practice shows that the constant propaganda support of our activities plays an important role in the system.</div>
            </div>
        </div>
        <div class="sectionM9 mt-[1.37rem]">
            Start using
        </div>
        <div class="sectionM10 mt-[2.37rem] text-[1.5rem] text-white font-bold text-center">
            Advantages
        </div>
        <div class="sectionM11 mt-[0.94rem] flex flex-col justify-center">
            <div class="flex flex-col items-center">
                <img class="w-[9.94831rem] h-[9.94831rem]" src="public/frontend/img/smartcontract5.png" alt="">
                <div class="name">Smart contract #1</div>
                <svg width="60" height="3" viewBox="0 0 60 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect y="0.250488" width="60" height="2" rx="1" fill="url(#paint0_linear_26_954)"/>
                    <defs>
                        <linearGradient id="paint0_linear_26_954" x1="32.2321" y1="2.77685" x2="34.694" y2="-21.0645" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#0194FE"/>
                            <stop offset="0.852811" stop-color="#0194FE" stop-opacity="0"/>
                        </linearGradient>
                    </defs>
                </svg>
                <div class="desc">Smart contracts are simply <br> programs stored </div>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-[9.94831rem] h-[9.94831rem]" src="public/frontend/img/smartcontract6.png" alt="">
                <div class="name">Smart contract #1</div>
                <svg width="60" height="2" viewBox="0 0 60 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="60" height="2" rx="1" fill="#0F988A"/>
                </svg>

                <div class="desc">Smart contracts are simply <br> programs stored </div>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-[9.94831rem] h-[9.94831rem]" src="public/frontend/img/smartcontract7.png" alt="">
                <div class="name">Smart contract #1</div>
                <svg width="60" height="2" viewBox="0 0 60 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="60" height="2" rx="1" fill="url(#paint0_linear_26_952)"/>
                    <defs>
                        <linearGradient id="paint0_linear_26_952" x1="32.2321" y1="6" x2="32.2543" y2="-15.3333" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#EBEBEB"/>
                            <stop offset="0.386688" stop-color="white"/>
                        </linearGradient>
                    </defs>
                </svg>
                <div class="desc">Smart contracts are simply <br> programs stored </div>
            </div>
        </div>
        <div class="sectionM12">
            Create project
        </div>
        <div class="sectionM13 text-[1.5rem] font-bold text-center mt-[2.25rem]">
            Tokenomics
        </div>
        <div class="sectionM14 text-[1.125rem] font-bold uppercase text-center mt-[0.69rem]">
            Distribution of tokens
        </div>
        <div class="sectionM15 mt-[0.56rem] font-[600] px-[1rem]">
            The <span class="text-[#01C3FD]">RACICHAIN</span> company has its own RACI.
        </div>
        <div class="sectionM16 mt-[1rem] px-[1rem] text-[0.8125rem]">
            It is accepted as a payment for the service, and also distributes the company's profits among the leaders.
        </div>
        <div class="sectionM17 mt-[1rem] px-[1rem] text-[0.8125rem]">
            All tokens accepted as payment are burned and withdrawn from circulation.
        </div>
        <div class="sectionM18 mt-[1.5rem] mr-[1rem] text-[1.125rem] font-[600] flex">
            <svg class="w-[4.125rem] h-[4.56931rem]" xmlns="http://www.w3.org/2000/svg" width="66" height="74" viewBox="0 0 66 74" fill="none">
                <path d="M54.5793 38.0798C57.9885 50.803 50.2971 63.9186 37.4 67.3744C29.4181 69.5131 21.313 67.4506 15.4863 62.5518" stroke="url(#paint0_linear_2001_24)" stroke-miterlimit="10"/>
                <path d="M14.7694 62.6171C15.5935 62.3963 16.0673 61.5745 15.8462 60.7494C15.6251 59.9244 14.8039 59.4496 13.9798 59.6704C13.1557 59.8913 12.6819 60.713 12.903 61.5381C13.0652 62.3789 13.9453 62.8379 14.7694 62.6171Z" fill="#2C3D4C" stroke="url(#paint1_linear_2001_24)" stroke-miterlimit="10"/>
                <path d="M7.00504 33.1931C10.4603 20.2978 23.6748 12.6345 36.5204 16.0765C44.4705 18.2067 50.4161 24.0913 52.9741 31.3242" stroke="url(#paint2_linear_2001_24)" stroke-miterlimit="10"/>
                <path d="M53.4616 28.7856C52.6375 28.5648 51.8163 29.0395 51.5952 29.8646C51.3741 30.6896 51.8479 31.5114 52.672 31.7322C53.4961 31.953 54.3173 31.4783 54.5384 30.6532C54.8184 29.8439 54.2857 29.0064 53.4616 28.7856Z" fill="#2C3D4C" stroke="url(#paint3_linear_2001_24)" stroke-miterlimit="10"/>
                <ellipse cx="30.9731" cy="41.7766" rx="17.2981" ry="17.6245" fill="url(#paint4_radial_2001_24)"/>
                <path d="M31.2762 32.6372L31.136 33.0579V45.5727L31.2762 45.7129L37.0604 42.2775L31.2762 32.6372Z" fill="#C7E7FF"/>
                <path d="M31.2765 32.6372L25.4573 42.2775L31.2765 45.7129V39.6483V32.6372Z" fill="#D8F6FF"/>
                <path d="M31.2764 46.7994L31.1712 46.9045V51.3566L31.2764 51.5669L37.0606 43.364L31.2764 46.7994Z" fill="#C7E7FF"/>
                <path d="M31.2765 51.5669V46.7994L25.4573 43.364L31.2765 51.5669Z" fill="#D8F6FF"/>
                <path d="M37.0608 42.2774L31.2766 45.7128V39.6482L37.0608 42.2774Z" fill="#9DCEDD"/>
                <path d="M31.2765 39.6482V45.7128L25.4573 42.2774L31.2765 39.6482Z" fill="#C7E7FF"/>
                <defs>
                    <linearGradient id="paint0_linear_2001_24" x1="77.1703" y1="44.4509" x2="38.4016" y2="89.1496" gradientUnits="userSpaceOnUse">
                        <stop offset="0.303689" stop-color="#004DF4" stop-opacity="0"/>
                        <stop offset="0.422945" stop-color="#004DF4" stop-opacity="0.4"/>
                        <stop offset="0.499089" stop-color="#004DF4"/>
                        <stop offset="0.649516" stop-color="#26DDFF"/>
                        <stop offset="0.953267" stop-color="#26DDFF" stop-opacity="0"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_2001_24" x1="13.9042" y1="59.4224" x2="16.0208" y2="67.7479" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#26BAD8"/>
                        <stop offset="0.803412" stop-color="#1C3D71"/>
                    </linearGradient>
                    <linearGradient id="paint2_linear_2001_24" x1="-9.25414" y1="16.2441" x2="46.9029" y2="-2.65708" gradientUnits="userSpaceOnUse">
                        <stop offset="0.303689" stop-color="#004DF4" stop-opacity="0"/>
                        <stop offset="0.422945" stop-color="#004DF4" stop-opacity="0.4"/>
                        <stop offset="0.674376" stop-color="#004DF4"/>
                        <stop offset="0.89827" stop-color="#0194FE"/>
                    </linearGradient>
                    <linearGradient id="paint3_linear_2001_24" x1="53.9358" y1="52.9448" x2="54.9432" y2="23.7164" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#26BAD8"/>
                        <stop offset="0.803412" stop-color="#0194FE"/>
                    </linearGradient>
                    <radialGradient id="paint4_radial_2001_24" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(33.4443 42.0054) rotate(26.5366) scale(76.3357 102.499)">
                        <stop stop-color="#00C3FD"/>
                        <stop offset="0.381991" stop-color="#0194FE"/>
                        <stop offset="1" stop-color="#0194FE"/>
                    </radialGradient>
                </defs>
            </svg>
            <div class=" py-[1rem]">
                <span class="text-[#01C3FD]">RACI</span> token - deflationary asset
            </div>
        </div>
        <div class="sectionM19">
            <img class="w-[100%] h-[34rem] pr-[3.5rem]" src="public/frontend/img/profitmobile.png" alt="">
        </div>
        <div class="sectionM14 text-[1.125rem] font-bold uppercase text-center">
            Profit Distribution
        </div>
        <div class="sectionM15 mt-[0.56rem] font-[600] px-[1rem]">
            <span class="text-[#01C3FD]">20%</span> of <span class="text-[#01C3FD]">RACI</span> profits are distributed by CBO holders through our <span class="text-[#01C3FD]">smart contract</span>.
        </div>
        <div class="sectionM16 mt-[1rem] px-[1rem] text-[0.8125rem]">
            It is accepted as a payment for the service, and also distributes the company's profits among the leaders.
        </div>
        <div class="sectionM17 mt-[1rem] px-[1rem] text-[0.8125rem]">
            All tokens accepted as payment are burned and withdrawn from circulation.
        </div>
        <div class="sectionM19 mt-[2.81rem]">
            <img class="w-[100%] pr-[1.25rem]" src="public/frontend/img/teammobile.png" alt="">
        </div>
        <div class="sectionM13 text-[1.5rem] font-bold text-center mt-[3.13rem]">
            <strong>RACICHAIN</strong> TEAM
        </div>
        <div class="sectionM20 relative w-[12.75rem] m-auto mt-[1rem]">
            <div class="listteamMobile slideImgMobile slider">
                <div class="item relative">
                    <img class="absolute w-full" src="{{ __BASE_URL__ }}/img/framteam1.png" alt="">
                    <img class="w-[24rem] bottom-[-4rem] left-0 absolute" src="{{ __BASE_URL__ }}/img/blurteam.png" alt="">
                    <div class="info absolute w-full flex flex-col items-center">
                        <img class="w-[10.08319rem] rounded-[2rem] mt-[1.28rem]" src="{{ __BASE_URL__ }}/img/elon.png" alt="">
                        <div class="tit">
                            ELONE MUSK
                        </div>
                        <div class="job">
                            CEO
                        </div>
                        <img class="mt-[0.44rem]" src="{{ __BASE_URL__ }}/img/share.png" alt="">
                    </div>
                </div>
                <div class="item relative">
                    <img class="absolute w-full" src="{{ __BASE_URL__ }}/img/framteam1.png" alt="">
                    <img class="w-[24rem] bottom-[-4rem] left-0 absolute" src="{{ __BASE_URL__ }}/img/blurteam.png" alt="">
                    <div class="info absolute w-full flex flex-col items-center">
                        <img class="w-[10.08319rem] rounded-[2rem] mt-[1.28rem]" src="{{ __BASE_URL__ }}/img/elon.png" alt="">
                        <div class="tit">
                            ELONE MUSK
                        </div>
                        <div class="job">
                            CEO
                        </div>
                        <img class="mt-[0.44rem]" src="{{ __BASE_URL__ }}/img/share.png" alt="">
                    </div>
                </div>
                <div class="item relative">
                    <img class="absolute w-full" src="{{ __BASE_URL__ }}/img/framteam1.png" alt="">
                    <img class="w-[24rem] bottom-[-4rem] left-0 absolute" src="{{ __BASE_URL__ }}/img/blurteam.png" alt="">
                    <div class="info absolute w-full flex flex-col items-center">
                        <img class="w-[10.08319rem] rounded-[2rem] mt-[1.28rem]" src="{{ __BASE_URL__ }}/img/elon.png" alt="">
                        <div class="tit">
                            ELONE MUSK
                        </div>
                        <div class="job">
                            CEO
                        </div>
                        <img class="mt-[0.44rem]" src="{{ __BASE_URL__ }}/img/share.png" alt="">
                    </div>
                </div>
            </div>
            <div class="prevSM absolute cursor-pointer top-[7rem] left-[-3rem]">
                <img src="{{ __BASE_URL__ }}/img/prev.png" alt="">
            </div>
            <div class="nextSM absolute cursor-pointer top-[7rem] right-[-3rem]">
                <img src="{{ __BASE_URL__ }}/img/next.png" alt="">
            </div>
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
                    <div class="sectionM3 mt-[2.75rem] connectEthButtonFooter cursor-pointer">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.3/lottie_svg.min.js" type="text/javascript"></script>
    <script>
        AOS.init();
        $('.slideImgDeva').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        centerMode: true,
        variableWidth: true,
        {{--autoplay: true,--}}
        autoplaySpeed: 2000,
        prevArrow: $('.prevS'),
        nextArrow: $('.nextS')
        });
        $('.slideOur').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        centerMode: true,
            variableWidth: true,
            autoplay: true,
        autoplaySpeed: 1000,
            dots: false,
            prevArrow: false,
            nextArrow: false
        });
        $('.slideImgMobile').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        centerMode: true,
        variableWidth: true,
        {{--autoplay: true,--}}
        autoplaySpeed: 2000,
        prevArrow: $('.prevSM'),
        nextArrow: $('.nextSM')
        });
        $('.openMenuM').click(function () {
        $('.menuMobile').show()
        });
        $('.closeMenuM').click(function () {
        $('.menuMobile').hide()
        });

        //Animation in infinite loop

        let svgContainer = document.getElementById('lottie');

        let animItem = bodymovin.loadAnimation({
            wrapper: svgContainer,
            animType: 'svg',
            loop: true,
            path: "{{ __BASE_URL__ }}/img/AnimationHeader.json" });

        let svganimProfit = document.getElementById('animProfit');

        let animProfit = bodymovin.loadAnimation({
            wrapper: svganimProfit,
            animType: 'svg',
            loop: true,
            path: "{{ __BASE_URL__ }}/img/aniProfit.json" });
        //# sourceURL=pen.js

        //# sourceURL=pen.js
        $('.btnShow').click(function () {
            let parent = $(this).parent('.item')
            parent.find('.desc').toggle()
        })
    </script>

@include('frontend.pages.footer')
