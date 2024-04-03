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
        <div class="section3 w-[71.3125rem] m-auto mt-[19.12rem] why-raci">
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
        <div class="section4 relative flex flex-col w-full items-center m-auto mt-[9rem] tokenomic">
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
        <div class="listQA mt-[1.5rem] w-[47.0625rem] m-auto faq">
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
        <div class="btnInvite m-auto mt-[4.44rem] inviteLink" data-aos="fade-up" onclick="copyToClipboard()" link="">
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
                    <div class="flex gap-[0.5rem]">
                        <img class="w-[2rem]" src="{{ __BASE_URL__ }}/img/new/fb.png" alt="">
                        <img class="w-[2rem]" src="{{ __BASE_URL__ }}/img/new/ins.png" alt="">
                        <img class="w-[2rem]" src="{{ __BASE_URL__ }}/img/new//in.png" alt="">
                    </div>
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
        <div class="h-[17.94rem]">
            <div id="homePage" class="h-full">

            </div>
        </div>
        <div class="w-[11.375rem] h-[1.8125rem] m-auto">
            <img class="w-[11.375rem] h-[1.8125rem] absolute" src="public/frontend/img/new/racichain.png" alt="">
        </div>
        <div class="mt-[1.56rem] text-[0.5rem] px-[1.5rem] text-center">
            Raci is a revolutionary project at the forefront of financial innovation. Our mission is to redefine how individuals engage with cryptocurrency trading by leveraging the power of Artificial Intelligence (AI). At the core of Raci's values lies a commitment to accessibility, security, and profitability for our users.
            <br>
            RaciChain is the world's largest blockchain and cryptocurrency encyclopedia with thousands of wikis on all topics and branches of knowledge in the crypto space.
        </div>
        <div class="m-auto btnBuyNow mt-[0.5rem]" onclick="location.href='buy-now';">
            BUY NOW
        </div>
        <div class="sectionM4 w-[13.9375rem] h-[15.8125rem] m-auto mt-[3.75rem] relative">
            <img class="w-full absolute" src="public/frontend/img/new/tokenM.png" alt="">
            <div class="w-full absolute h-full flex flex-col items-center justify-between p-[2.06rem]">
                <div class="tit">
                    $RACI TOKEN
                </div>
                <div class="btn cursor-pointer">
                    Connect wallet
                </div>
            </div>
        </div>
        <div class="sectionM5 px-[1rem] mt-[6.87rem]">
            About company
        </div>
        <div class="sectionM6 px-[1rem] mt-[2.05rem] flex flex-col gap-[2.05rem]">
            <div>
                Welcome to RaciChain, where innovation meets opportunity in the world of AI-driven trading. $RACI is more than a platform; it's a vision realized, a community of forward-thinkers, and a catalyst for positive change in the cryptocurrency landscape.
            </div>
            <div>
                For full transparency, every edit on RaciChain is recorded on the Polygon blockchain and Binance Labs with the transaction hash stored on-chain. The data and images uploaded as part of each wiki are stored on the IPFS network and the hashes are included on each page for the users to verify.
            </div>
        </div>
        <div class="mt-[3.56rem] w-[15.6875rem] h-[28.5625rem] m-auto rounded-[50px] overflow-hidden" style="border-radius: 50px;background: rgba(43, 101, 150, 0.27);backdrop-filter: blur(25px);">
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
        <div class="sectionM5 px-[1rem] mt-[4.88rem] h-[2.5rem] why-raciM">
            What Sets Us Apart?
        </div>
        <div class="list-worksM flex justify-center flex-col">
            <div class="item flex items-center" data-aos="fade-up">
                <div class="number relative flex justify-center items-center">
                    <div class="select flex justify-center items-center">
                        1
                    </div>
                </div>
                <div class="w-[9rem]">
                    <div class="tit">
                        Technological Excellence
                    </div>
                    <div class="desc">
                        RaciChain stands on the forefront of technological excellence, leveraging advanced AI to craft exclusive trading strategies and innovative features.
                    </div>
                </div>
            </div>
            <div class="item flex items-center" data-aos="fade-up">
                <div class="number relative flex justify-center items-center">
                    <div class="select flex justify-center items-center">
                        2
                    </div>
                </div>
                <div class="w-[9rem]">
                    <div class="tit">
                        User-Centric Approach
                    </div>
                    <div class="desc">
                        We prioritize our users, providing a user-friendly interface, educational resources, and customization options to ensure every trader can thrive in our ecosystem.
                    </div>
                </div>
            </div>
            <div class="item flex items-center" data-aos="fade-up">
                <div class="number relative flex justify-center items-center">
                    <div class="select flex justify-center items-center">
                        3
                    </div>
                </div>
                <div class="w-[9rem]">
                    <div class="tit">
                        Community Collaboration
                    </div>
                    <div class="desc">
                        RaciChain is more than a platform, it's a community. Collaborative development, decentralized governance, and user empowerment define our approach to building a vibrant ecosystem.
                    </div>
                </div>
            </div>
        </div>

        <div class="section4 relative flex flex-col w-full items-center m-auto mt-[9rem] tokenomicM">
            <div class="absolute top-[0.3rem] left-0 w-full" data-aos="fade-up">
                <img class="w-full" src="{{ __BASE_URL__ }}/img/new/bgtokenomicM.png" alt="">
            </div>
            <div
                    class="tit uppercase" data-aos="fade-up"
            >
                Tokenomics
            </div>
            <div
                    class="text-token mt-[5rem] text-center px-[2rem]" data-aos="fade-up"
            >
                RaciChain stands on the forefront of technological excellence, leveraging
                advanced AI to craft exclusive trading strategies and innovative features.
                User-Centric Approach
                <div class="mt-[2rem]"></div>
                We prioritize our users, providing a user-friendly interface, educational
                resources, and customization options to ensure every trader can thrive in our
                ecosystem.
                <div class="mt-[2rem]"></div>
                Community Collaboration:
                RaciChain is more than a platform, it's a community. Collaborative
                development, decentralized governance, and user empowerment define our
                approach to building a vibrant ecosystem.
            </div>

        </div>
        <div class="w-full m-auto mt-[5.19rem]" data-aos="fade-up">
            <img class="w-full" src="{{ __BASE_URL__ }}/img/new/tokenMM.png" alt="">
        </div>
        <div class="flex flex-col items-center w-full m-auto mt-[5rem]">
            <div
                    class="self-center text-[0.9375rem] font-bold text-pink-600 uppercase" data-aos="fade-up"
            >
                Earn Profits With RACI
            </div>
            <div class="mt-[0.75rem] w-full max-md:max-w-full">
                <div class="flex gap-5 max-md:flex-col max-md:gap-0" data-aos="fade-up">
                    <div class="flex flex-col ml-5 w-6/12 max-md:ml-0 max-md:w-full">
                        <div id="animProfitM">

                        </div>
                    </div>
                    <div class="flex flex-col w-full max-md:ml-0 max-md:w-full">
                        <div
                                class="flex flex-col grow px-5 mt-8 text-[0.625rem] text-center text-white"
                        >
                            <div
                                    class="text-[0.625rem] font-semibold "
                            >
                                <span class="text-rose-500">20%</span>
                                <span class="">of</span>
                                <span class="text-rose-500 uppercase">RACI</span>
                                <span class="">
            profits are distributed by RACI holders through our
          </span>
                                <span class="text-rose-500">smart contract.</span>
                            </div>
                            <div class="mt-[0.5rem]">
                                It is accepted as a payment for the service, and also distributes the
                                company's profits among the leaders.
                            </div>
                            <div class="mt-[0.5rem]">
                                All tokens accepted as payment are burned and withdrawn from
                                circulation.
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="sectionM5 px-[1rem] mt-[3rem]" data-aos="fade-up">
            RACI CHAIN TEAM
        </div>
        <div class="sectionM20 relative w-[12.75rem] m-auto mt-[0.75rem]">
            <div class="listteamMobile slideImgMobile slider">
                <div class="item relative">
                    <img class="absolute w-full h-full" src="{{ __BASE_URL__ }}/img/new/bgteam.png" alt="">
                    <div class="info absolute w-full flex flex-col items-center">
                        <img class="w-[8.23444rem] h-[6.98863rem] rounded-[2rem] mt-[1.28rem]" src="{{ __BASE_URL__ }}/img/new/team1.png" alt="">
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
                        <img class="w-[8.23444rem] h-[6.98863rem] rounded-[2rem] mt-[1.28rem]" src="{{ __BASE_URL__ }}/img/new/team2.png" alt="">
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
                        <img class="w-[8.23444rem] h-[6.98863rem] rounded-[2rem] mt-[1.28rem]" src="{{ __BASE_URL__ }}/img/new/team3.png" alt="">
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
                        <img class="w-[8.23444rem] h-[6.98863rem] rounded-[2rem] mt-[1.28rem]" src="{{ __BASE_URL__ }}/img/new/team4.png" alt="">
                        <div class="tit">
                            Roberto Doberscu
                        </div>
                        <div class="job">
                            Marketing and Community
                        </div>
                    </div>
                </div>
            </div>
            <div class="prevSM absolute cursor-pointer top-[6rem] left-[-1.5rem]">
                <img class="w-[1.79275rem] h-[1.79275rem]" src="{{ __BASE_URL__ }}/img/prev.png" alt="">
            </div>
            <div class="nextSM absolute cursor-pointer top-[6rem] right-[-1.5rem]">
                <img class="w-[1.79275rem] h-[1.79275rem]" src="{{ __BASE_URL__ }}/img/next.png" alt="">
            </div>
        </div>
        <div class="sectionM5 px-[1rem] mt-[6.37rem] normal-case" data-aos="fade-up">
            Our Partners
        </div>
        <div class="section7 relative h-[3.75344rem] w-[15.875rem] m-auto mt-[3.87rem]">
            <div class=" slideOurM slider mt-[3.75rem] overflow-hidden">
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
        <div class="sectionM5 px-[1rem] mt-[8.5rem] normal-case" data-aos="fade-up">
            Frequently Asked Questions
        </div>
        <div class="listQAM mt-[1.5rem] w-full px-[1rem] m-auto faqM">
            <div class="item" data-aos="fade-up">
                <div class="name">
                    What distinguishes RaciChain from other trading platforms?
                </div>
                <div class="desc hidden">
                    RACI   stands out with its AI-driven Bot Trading, offering users automated and   optimized trading strategies. The platform's emphasis on innovation,   technology, and financial empowerment sets it apart.
                </div>

                <svg class="btnShow" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.26562 17.3381V0.0539763H10.7045V17.3381H7.26562ZM0.349432 10.4091V6.97017H17.6335V10.4091H0.349432Z" fill="white"/>
                </svg>
            </div>
            <div class="item" data-aos="fade-up">
                <div class="name">
                    How does RACI's AI-powered Bot Trading work?
                </div>
                <div class="desc hidden">
                    RACI's AI-driven Bot Trading uses advanced algorithms for swift   market data analysis and timely trading decisions. Users benefit from   high-speed processing, accuracy, adaptability, and risk minimization.                     </div>
                <svg class="btnShow" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                <svg class="btnShow" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                <svg class="btnShow" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                <svg class="btnShow" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.26562 17.3381V0.0539763H10.7045V17.3381H7.26562ZM0.349432 10.4091V6.97017H17.6335V10.4091H0.349432Z" fill="white"/>
                </svg>
            </div>
            <div class="item" data-aos="fade-up">
                <div class="name">
                    What is the utility of $RACI token?
                </div>
                <div class="desc hidden">
                    The $RACI token is versatile, allowing users to purchase Bot   Auto Trading, stake for rewards, delegate to the Binance Lab, Polygon (Matic)   and Dao for adjustments, and participate in the RaciChain ecosystem.                 </div>
                <svg class="btnShow" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                <svg class="btnShow" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.26562 17.3381V0.0539763H10.7045V17.3381H7.26562ZM0.349432 10.4091V6.97017H17.6335V10.4091H0.349432Z" fill="white"/>
                </svg>
            </div>
            <div class="item" data-aos="fade-up">
                <div class="name">
                    How can users embark on their journey with RaciChain?
                </div>
                <div class="desc hidden">
                    Users can start their journey by exploring RaciChain.com   innovative features. Beginners have access to educational materials, user   guides, and a supportive community.                       </div>
                <svg class="btnShow" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.26562 17.3381V0.0539763H10.7045V17.3381H7.26562ZM0.349432 10.4091V6.97017H17.6335V10.4091H0.349432Z" fill="white"/>
                </svg>
            </div>
            <div class="item" data-aos="fade-up">
                <div class="name">
                    What advantages does it offer?
                </div>
                <div class="desc hidden">
                    RaciChain's Dex revolutionizes the trading experience with   enhanced security, transparency, and user control over assets, providing an   overview of its key features.                  </div>
                <svg class="btnShow" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.26562 17.3381V0.0539763H10.7045V17.3381H7.26562ZM0.349432 10.4091V6.97017H17.6335V10.4091H0.349432Z" fill="white"/>
                </svg>
            </div>
            <div class="item" data-aos="fade-up">
                <div class="name">
                    How does $RACI leverage Machine Learning to enhance Bot Trading?
                </div>
                <div class="desc hidden">
                    The updated Machine Learning upgrade strengthens BitDail Bot   Trading, using Data Science and Statistics & Probability to optimize   trading strategies and shape the future of smart trading.                </div>
                <svg class="btnShow" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.26562 17.3381V0.0539763H10.7045V17.3381H7.26562ZM0.349432 10.4091V6.97017H17.6335V10.4091H0.349432Z" fill="white"/>
                </svg>
            </div>
        </div>
        <div class="m-auto btnBuyNow mt-[6.17rem] inviteLink" onclick="copyToClipboard()" link="">
            MAKE YOUR LINK INVITE
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
        $('.slideOurM').slick({
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

        let lottieM = document.getElementById('homePage');

        let homePage = bodymovin.loadAnimation({
            wrapper: lottieM,
            animType: 'svg',
            loop: true,
            path: "{{ __BASE_URL__ }}/img/AnimationHeader.json" });

        let svganimProfit = document.getElementById('animProfit');

        let animProfit = bodymovin.loadAnimation({
            wrapper: svganimProfit,
            animType: 'svg',
            loop: true,
            path: "{{ __BASE_URL__ }}/img/aniProfit.json" });

        let svganimProfitM = document.getElementById('animProfitM');

        let animProfitM = bodymovin.loadAnimation({
            wrapper: svganimProfitM,
            animType: 'svg',
            loop: true,
            path: "{{ __BASE_URL__ }}/img/aniProfit.json" });
        //# sourceURL=pen.js

        //# sourceURL=pen.js
        $('.btnShow').click(function () {
            let parent = $(this).parent('.item')
            parent.find('.desc').toggle()
        })
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

    </script>

@include('frontend.pages.footer')
