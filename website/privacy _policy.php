<?php include "header.php"?>
<style>
        body {
            font-family: 'Arial', sans-serif;
            color: black;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #57BA98;
            padding: 40px 0;
            text-align: center;
        }

        .banner-text {
            color: black;
            font-size: 54px;
            font-family: 'Lilita One', sans-serif;
            animation: slideDown 1s ease forwards;
        }

        main {
            padding: 40px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Animation keyframes */
        @keyframes slideDown {
            0% {
                transform: translateY(-10px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Privacy policy content styles */
        .privacy-policy {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        .privacy-policy h2 {
            color: #57BA98;
            font-size: 28px;
            margin-bottom: 10px;
        }

        .privacy-policy p {
            margin-bottom: 20px;
            line-height: 1.5;
        }

        /* Back button styles */
        .back-button {
            background-color: #57BA98;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #4CA786;
        }
    </style>
</head>
<body>
    <header>
        <div class="banner-text">(PRIVACY POLICY)</div>
    </header>

    <main>
        <div class="privacy-policy">
            <h2>Introduction</h2>
            <p>The SRS Electrical appliances are the manufacturers of some electrical products like switch gears, fuses, capacitors, resistors, etc…. These products after manufactured they are sent for testing where the product is subjected to some testing conditions, and then after the testing is successful at their laboratories they are sent to CPRI for further testing process, so that they can get it approved from CPRI and then release the product into the market. If the testing fails then the product is sent back for re-manufacturing it and then they are again subjected to tests.</p>

            <h2>Existing Scenario</h2>
            <p>Initially after the product is manufactured the companies testing department tests the product and maintains the details of the testing done like the type of testing and as well the result of the testing that the product is subjected to. Actually the testing process usually depends on the type of the product to be tested.</p>

            <h2>Proposed Solution</h2>
            <p>In order to avoid the confusion in maintaining the records, misplacement of the records, and to reduce the time consumption in entering and fetching the details they want an application to be built that holds all the information of the testing like the type of testing conducted, result and even they should be able to capture the type of the testing done.</p>

            <h2>Non-Financial</h2>
            <ul>
                <li>The details of the products and the testing like the product code, product id, testing id, the revise, the testing performed, remarks provided, the result of the testing, etc…. are needed to be maintained in a separate database.</li>
                <li>Product id should be a unique 10 digit code as described by the manufacturing unit and the testing id should be a unique 12 digit code, which should be automatically generated.</li>
            </ul>

            <h2>Financial</h2>
            <p>After the product is subjected for testing and if it fails it is to be sent for re-making else it will be sent for further testing procedures that are held by the CPRI and get it approved from them so as to release the product in to the market.</p>

            <h2>Functional Requirements</h2>
            <ul>
                <li>The details are needed to be captured based on the type of the testing and as well based on the product.</li>
                <li>The status of the testing and as well the detailed remarks is also needed to be captured.</li>
            </ul>
        </div>
    </main>

  <?php include "footer.php"?>
</body>
</html>
