<?php include "header.php"?>
    <style>
/* Global styles */
body {
    font-family: 'Arial', sans-serif;
    background-color: #65CCB8;
    color: black;
    margin: 0;
    padding: 0;
}

/* Header styles */
header {
    background-color: #57BA99;
    padding: 20px 0;
}

.banner {
    text-align: center;
}

.banner-text {
    color: black;
    font-size: 34px;
    animation: slideDown 1s ease forwards;
    font-family:"Lilita One" ,sans-serif;
}

/* Main content styles */
main {
    padding: 20px;
}

.faq-container {
    max-width: 800px;
    margin: 0 auto;
}

.faq-item {
    margin-bottom: 20px;
    padding: 10px;
    border-radius: 5px;
    background-color: #fff;
    cursor: pointer;
    overflow: hidden; /* Added to prevent answer text from overflowing */
}

.question {
    font-weight: bold;
    margin-bottom: 10px;
}

.answer {
    display: none;
    animation: slideDown 0.5s ease;
    white-space: pre-wrap; /* Added to preserve line breaks in answers */
    margin-top: 10px; /* Added margin between question and answer */
    padding: 10px; /* Added padding to answer */
}

/* Keyframes for animations */
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

.banner {
    background-image: url('banner.jpg');
    background-size: cover; /* Cover ensures the image covers the entire area of the banner */
    background-position: center; /* Center the image within the banner */
    background-repeat: no-repeat; /* Prevent the image from repeating */
    text-align: center; /* Center-align the text within the banner */
    padding: 30px 0; /* Adjust padding as needed for both top and bottom */
    position: relative; /* Needed for z-index */
    height: 200px; /* Adjust the height of the banner */
    width: 100%; /* Adjust the width of the banner */
    margin: 0 auto; /* Center the banner horizontally */
    filter: blur(2px); /* Apply a blur effect to the background image */
}

.banner-text {
    color: white;
    font-size: 64px; /* Reduced font size for better visibility */
    animation: slideDown 1s ease forwards;
    font-family: "Lilita One", sans-serif;
    position: relative; /* Ensure the text stays above the image */
    z-index: 1; /* Ensure the text stays above the image */
    text-shadow: 1px 1px 2px rgba(0,0,0,0.5); /* Add a shadow to make the text clearer */
}

/* Responsive Styles */
@media only screen and (max-width: 600px) {
    .banner-text {
        font-size: 36px; /* Adjusted font size for smaller screens */
    }
}
    </style>
</head>
<body>

<header>
    <div class="banner">
        <h1 class="banner-text">(FAQS) Frequently Asked Questions</h1>
    </div>
</header>

<main>
    <section class="faq-container">
        <div class="faq-item" id="faq1">
            <h2 class="question"><span class="icon"></span>What products do you manufacture?</h2>
            <p class="answer">We manufacture electrical products such as switch gears, fuses, capacitors, resistors, etc.</p>
        </div>
        <div class="faq-item" id="faq2">
            <h2 class="question"><span class="icon"></span>What is the testing process for your products?</h2>
            <p class="answer">After manufacturing, our products undergo testing in our laboratories. Successful products are sent to CPRI for further testing and approval.</p>
        </div>
        <div class="faq-item" id="faq3">
            <h2 class="question"><span class="icon"></span>How are testing records maintained?</h2>
            <p class="answer">Testing records are maintained digitally using a modular application. Each product is assigned a unique product ID for tracking.</p>
        </div>
        <div class="faq-item" id="faq4">
            <h2 class="question"><span class="icon"></span>What happens if a product fails testing?</h2>
            <p class="answer">Failed products are sent back for re-manufacturing and re-testing to ensure quality standards are met.</p>
        </div>
        <div class="faq-item" id="faq5">
            <h2 class="question"><span class="icon"></span>What are the financial implications of testing?</h2>
            <p class="answer">Products that pass testing proceed to further procedures for market approval. Failed products incur additional costs for re-making.</p>
        </div>
        <div class="faq-item" id="faq6">
            <h2 class="question"><span class="icon"></span>How do I access detailed testing information?</h2>
            <p class="answer">You can access detailed testing information through our application by entering the product or testing ID.</p>
        </div>
    </section>
</main>

<script>
    // JavaScript for animations
    document.addEventListener('DOMContentLoaded', function() {
        const faqItems = document.querySelectorAll('.faq-item');
        faqItems.forEach(item => {
            item.addEventListener('click', () => {
                const answer = item.querySelector('.answer');
                if (answer.style.display === 'block') {
                    answer.style.display = 'none';
                } else {
                    answer.style.display = 'block';
                    typeAnswer(answer);
                }
            });
        });
    });

    function typeAnswer(answerElement) {
        const answerText = answerElement.innerText;
        answerElement.innerText = '';
        let index = 0;
        const typingInterval = setInterval(() => {
            if (index < answerText.length) {
                answerElement.innerText += answerText[index];
                index++;
            } else {
                clearInterval(typingInterval);
            }
        }, 50); 
    }
</script>
<?php include "footer.php"?>
</body>
</html>