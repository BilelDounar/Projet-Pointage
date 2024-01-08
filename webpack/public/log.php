<?php
require('../inc/function.php');

include('../view/header.php'); ?>

<section class="mobile">
    <section class="index">
        <div class="wrap">
        <div class="logo"><a href="index.php">
                    <img src="asset/img/logo.png" alt="logo">
                </a>
            </div>
            <div class="welcome">
                <svg xmlns="http://www.w3.org/2000/svg" width="49" height="47" viewBox="0 0 49 47" fill="none">
                    <path d="M23.1609 42.4826C21.4256 41.1815 5.31107 26.5412 5.13094 26.3811C4.41923 25.7162 3.97112 25.0267 3.84811 24.3946C3.72071 23.7379 3.93598 23.1633 4.5071 22.6297C5.03869 22.1331 5.68889 21.8704 6.38742 21.8704C7.23971 21.8704 8.11397 22.248 8.84326 22.9335L16.1493 29.4923C16.2767 29.6072 16.4436 29.6646 16.6062 29.6646C16.7775 29.6646 16.9444 29.6031 17.0718 29.484C17.3267 29.246 17.3267 28.8602 17.0762 28.6221L5.41211 17.3679C4.2435 16.2761 3.69435 14.6057 5.08262 13.3087C5.6142 12.812 6.26441 12.5494 6.96294 12.5494C7.81523 12.5494 8.68949 12.927 9.41877 13.6124L21.3509 24.4808C21.4783 24.5957 21.6452 24.6573 21.8122 24.6573C21.9791 24.6573 22.1505 24.5957 22.2779 24.4767C22.5327 24.2386 22.5371 23.8528 22.2823 23.6107L7.95142 9.88562C7.28804 9.26585 6.88825 8.52296 6.81796 7.80059C6.75206 7.0659 7.02884 6.38458 7.62193 5.83048C8.15351 5.33385 8.80372 5.07117 9.50225 5.07117C10.3545 5.07117 11.2288 5.44878 11.9581 6.13011L26.5745 19.4447C26.7019 19.5596 26.8688 19.6212 27.0358 19.6212C27.2027 19.6212 27.3741 19.5596 27.5015 19.4406C27.7563 19.2026 27.7607 18.8168 27.5059 18.5746L16.8917 8.38341C16.2239 7.75955 15.8242 7.02076 15.7583 6.29839C15.6924 5.5637 15.9691 4.88237 16.5622 4.32828C17.0938 3.83165 17.744 3.56897 18.4425 3.56897C19.2948 3.56897 20.1691 3.94657 20.8984 4.63201C24.7908 8.20282 34.9524 17.5403 35.2951 17.8851C36.5999 18.7265 36.8635 17.4541 36.9294 16.6291C37.0041 15.6687 35.8267 12.3154 36.5121 9.29869C37.6631 5.28871 40.98 5.94541 41.0547 5.97824C42.8735 6.77449 42.5264 7.96477 41.8806 10.3576L41.8147 10.8296C41.1382 13.9572 45.7862 23.2249 46.1289 23.9185C47.9521 27.6453 50.0521 35.2015 43.0976 41.6987C35.4753 48.8198 26.0385 45.171 23.1609 42.4826Z" fill="url(#paint0_radial_1_17)" />
                    <path d="M32.9403 46.4802C28.2659 46.4802 24.29 44.3911 22.7216 42.9423C21.3114 41.8669 12.4106 33.8387 5.16171 27.2676C4.86736 27.0008 4.69602 26.849 4.67845 26.8284C3.85691 26.0609 3.34729 25.2606 3.20231 24.5054C3.03537 23.6475 3.32093 22.8718 4.04142 22.1946C4.70041 21.5789 5.50878 21.2547 6.38743 21.2547C7.41985 21.2547 8.45666 21.698 9.30895 22.4983L16.6062 29.0489L4.93765 17.7947C3.59331 16.5388 2.91675 14.4578 4.61694 12.8735C5.27593 12.2579 6.08429 11.9336 6.96295 11.9336C7.99537 11.9336 9.03218 12.3769 9.88447 13.1773L21.8078 24.0375L7.48135 10.3165C6.71692 9.60235 6.24685 8.72811 6.16337 7.85799C6.0799 6.93039 6.42258 6.08079 7.15625 5.39536C7.81524 4.7797 8.6236 4.45545 9.50226 4.45545C10.5303 4.45545 11.5671 4.89462 12.4238 5.69498L27.0358 19.0055L16.4217 8.81431C15.6528 8.09604 15.1828 7.22181 15.1037 6.35168C15.0202 5.42819 15.3629 4.57858 16.0966 3.89315C16.7555 3.27749 17.5639 2.95325 18.4426 2.95325C19.475 2.95325 20.5118 3.39652 21.3641 4.19688L24.5316 7.09867C30.177 12.2702 34.8953 16.6003 35.4006 17.0846C35.6466 17.2693 35.9673 17.3391 36.1035 17.2775C36.1914 17.2365 36.288 17.0477 36.2704 16.6496C36.2441 15.9518 36.1386 15.0858 36.0288 14.1705C35.8091 12.3318 35.5807 10.4273 35.8663 9.17139C36.4901 6.99196 37.7158 6.06847 38.6296 5.67035C39.8861 5.12857 41.103 5.31737 41.3359 5.41998C43.6204 6.42145 43.1679 8.09604 42.544 10.4191L42.5308 10.4766L42.4606 10.9568C42.0037 13.0582 44.3497 18.8659 46.6957 23.5983L46.7308 23.664C48.2992 26.8654 51.1241 35.0783 43.5677 42.1378C40.0926 45.3762 36.3319 46.4802 32.9403 46.4802ZM6.38743 22.486C5.86902 22.486 5.37698 22.6871 4.9728 23.0647C4.55544 23.4546 4.41046 23.8322 4.49832 24.2837C4.59498 24.7804 4.98598 25.3714 5.59664 25.946C5.60103 25.9501 5.77677 26.1102 6.0799 26.3811C16.3689 35.7103 22.581 41.2554 23.5739 42.0024L23.6266 42.0475C26.0517 44.3131 35.0623 48.3354 42.6319 41.2636C49.604 34.7499 46.9812 27.1445 45.5271 24.1729L45.4963 24.1113C43.985 21.0659 40.5495 13.678 41.1601 10.7311L41.2612 10.1154C41.9378 7.60351 41.9773 7.07815 40.8307 6.561C40.4924 6.50354 38.0673 6.22854 37.1403 9.45869C36.9075 10.4889 37.1315 12.3728 37.3292 14.0351C37.4434 14.975 37.5489 15.8656 37.5752 16.6085C37.6192 17.7783 37.0261 18.2257 36.6658 18.3898C35.9322 18.7223 35.0579 18.4391 34.5131 18.0122L34.456 17.963C34.188 17.6921 27.8134 11.8516 23.5959 7.98522L20.4239 5.07521C19.3432 4.06143 17.9505 3.89315 17.0147 4.76738C16.5578 5.19424 16.3514 5.69498 16.3997 6.24907C16.4524 6.82779 16.7863 7.43113 17.3442 7.95239L27.9803 18.1436C28.4812 18.6197 28.4812 19.3995 27.9716 19.8756C27.4839 20.3312 26.6228 20.3394 26.122 19.8879L11.4968 6.56921C10.4161 5.55953 9.019 5.39125 8.08762 6.26548C7.63072 6.69234 7.42424 7.19308 7.47257 7.74717C7.52968 8.32588 7.86357 8.93333 8.41712 9.44638L22.7524 23.1796C23.2576 23.6558 23.2532 24.4356 22.7436 24.9117C22.2559 25.3673 21.3948 25.3755 20.894 24.924L8.95749 14.0515C7.87675 13.0336 6.47969 12.8694 5.54832 13.7437C4.41046 14.8067 5.01673 16.1242 5.87781 16.9328L17.5507 28.1952C18.0516 28.6713 18.0472 29.447 17.5375 29.919C17.0455 30.3787 16.1932 30.3828 15.6924 29.9355L8.38637 23.3767C7.77131 22.7979 7.06399 22.486 6.38743 22.486Z" fill="#EDA600" />
                    <path d="M34.2451 17.4869C31.8332 22.088 32.1452 28.5277 35.7652 33.6951C36.1738 34.3929 36.8723 34.0522 36.5165 33.334C32.1452 24.5957 36.7273 18.2996 36.7273 18.2996L34.2451 17.4869Z" fill="#EDA600" />
                    <path d="M24.7601 0.232059C26.0868 -0.0921868 27.5015 -0.0634561 28.8766 0.236164C30.2429 0.543993 31.6092 1.19249 32.624 2.25142C33.6169 3.30214 34.2276 4.5786 34.434 5.91663C34.6274 7.24235 34.4472 8.60911 33.7751 9.74191C33.696 8.46956 33.4587 7.29981 33.059 6.22035C32.8525 5.68268 32.6108 5.16963 32.3165 4.68532C32.0265 4.2051 31.6839 3.72899 31.3192 3.33908C30.5768 2.53872 29.5707 1.91486 28.4416 1.43054C27.3082 0.929805 26.0737 0.56041 24.7601 0.232059Z" fill="#B0BEC5" />
                    <path d="M25.1247 4.12306C25.8584 3.688 26.7766 3.5977 27.6421 3.74136C28.5163 3.88501 29.351 4.29134 30.01 4.85364C30.6646 5.42415 31.1303 6.14242 31.4203 6.88942C31.5608 7.26292 31.6311 7.65694 31.697 8.03865C31.719 8.43267 31.719 8.82669 31.6531 9.22071C31.35 8.92109 31.1127 8.62147 30.8887 8.33006C30.6295 8.05506 30.4274 7.76365 30.1945 7.49687C29.7376 6.9674 29.2939 6.48719 28.8151 6.06033C28.323 5.64579 27.8046 5.2805 27.2027 4.96446C26.6052 4.64022 25.9331 4.36933 25.1247 4.12306Z" fill="#90A4AE" />
                    <path d="M0.00839685 30.1284C0.627848 31.2612 1.27366 32.312 2.02491 33.2395C2.77176 34.1671 3.62845 34.9552 4.62572 35.4682C5.10898 35.7186 5.6845 35.9361 6.24684 36.1003C6.81357 36.2686 7.40227 36.3835 8.00854 36.4615C9.22108 36.601 10.4951 36.5764 11.8439 36.3835C10.7983 37.2331 9.40121 37.6846 7.97779 37.7831C6.53679 37.8734 5.07384 37.582 3.76464 36.8924C2.44666 36.1906 1.48014 35.0742 0.873871 33.888C0.2676 32.6937 -0.0575022 31.409 0.00839685 30.1284Z" fill="#B0BEC5" />
                    <path d="M4.16003 29.6482C4.58618 30.3377 5.00793 30.8918 5.46923 31.3761C5.92613 31.8605 6.41817 32.2586 6.95415 32.6198C7.49892 32.9686 8.0964 33.2765 8.7466 33.5843C9.07171 33.7403 9.41877 33.8634 9.76145 34.044C10.1173 34.1876 10.4776 34.3395 10.8554 34.557C10.4556 34.6966 10.047 34.7787 9.62965 34.8402C9.21668 34.8567 8.79054 34.8772 8.36878 34.8238C7.52528 34.7171 6.68177 34.4421 5.9437 33.9619C5.21881 33.4735 4.61693 32.7963 4.28744 32.0287C3.95355 31.2653 3.8569 30.4116 4.16003 29.6482Z" fill="#90A4AE" />
                    <defs>
                        <radialGradient id="paint0_radial_1_17" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(16.3585 13.9817) rotate(-43.0529) scale(38.6899 38.6005)">
                            <stop offset="0.3533" stop-color="#FFCA28" />
                            <stop offset="0.8723" stop-color="#FFB300" />
                        </radialGradient>
                    </defs>
                </svg>
                <h1>Bienvenue!</h1>
                <p>Votre feuille de pointage en ligne!</p>
            </div>
            <div class="btn-group"> 
                <a class="button button_white" href="login.php">SE CONNECTER</a>
                <a class="button button_green" href="signin.php">S’INSCRIRE</a>
            </div>
            <span class="design">Designed & Executed by Bilel D.</span>
    </section>
</section>

<?php include('../view/footer.php');
