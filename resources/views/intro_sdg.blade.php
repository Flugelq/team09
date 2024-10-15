<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>可持續發展目標（SDG）介紹</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background: #007bff;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
        }

        main {
            padding: 20px;
        }

        section {
            background: white;
            margin: 15px 0;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #007bff;
        }

        ul {
            list-style-type: disc;
            padding-left: 20px;
        }

        .goal {
            cursor: pointer;
            margin: 10px 0;
            padding: 10px;
            background: #e7f1ff;
            border: 1px solid #007bff;
            border-radius: 5px;
        }

        .details {
            display: none;
            padding: 10px;
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 10px;
        }

        footer {
            text-align: center;
            padding: 10px 0;
            background: #007bff;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
    <script>
        function toggleDetails(goalId) {
            const details = document.getElementById(goalId);
            details.style.display = details.style.display === 'block' ? 'none' : 'block';
        }
    </script>
</head>
<body>
    <header>
        <h1>可持續發展目標（SDG）介紹</h1>
        <nav>
            <ul>
                <li><a href="#what-is-sdg">什麼是SDG？</a></li>
                <li><a href="#goals">17項可持續發展目標</a></li>
                <li><a href="#importance">為什麼SDG重要？</a></li>
                <li><a href="#get-involved">如何參與？</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="what-is-sdg">
            <h2>什麼是SDG？</h2>
            <p>可持續發展目標（Sustainable Development Goals，SDGs）是由聯合國於2015年通過的17項全球目標，旨在解決全球最緊迫的挑戰，包括貧窮、不平等和氣候變化等。</p>
        </section>
        <section id="goals">
            <h2>17項可持續發展目標</h2>
            <div class="goal" onclick="toggleDetails('goal1-details')">
                目標1：消除貧窮
            </div>
            <div id="goal1-details" class="details">
                <p>消除所有形式的貧窮，特別是在所有國家的城市和鄉村中。</p>
            </div>

            <div class="goal" onclick="toggleDetails('goal2-details')">
                目標2：消除飢餓
            </div>
            <div id="goal2-details" class="details">
                <p>終結飢餓，實現食物安全和改善營養，促進可持續農業。</p>
            </div>

            <div class="goal" onclick="toggleDetails('goal3-details')">
                目標3：健康與福祉
            </div>
            <div id="goal3-details" class="details">
                <p>確保健康生活，促進各年齡層的福祉。</p>
            </div>

            <div class="goal" onclick="toggleDetails('goal4-details')">
                目標4：優質教育
            </div>
            <div id="goal4-details" class="details">
                <p>確保包容和公平的優質教育，促進終身學習的機會。</p>
            </div>

            <div class="goal" onclick="toggleDetails('goal5-details')">
                目標5：性別平等
            </div>
            <div id="goal5-details" class="details">
                <p>實現性別平等，賦予所有女性和女童權力。</p>
            </div>

            <div class="goal" onclick="toggleDetails('goal6-details')">
                目標6：清潔水與衛生設施
            </div>
            <div id="goal6-details" class="details">
                <p>確保可持續管理水資源和衛生設施，人人享有清潔水。</p>
            </div>

            <div class="goal" onclick="toggleDetails('goal7-details')">
                目標7：可再生能源
            </div>
            <div id="goal7-details" class="details">
                <p>確保人人可獲得負擔得起、可靠、可持續和現代的能源。</p>
            </div>

            <div class="goal" onclick="toggleDetails('goal8-details')">
                目標8：體面工作與經濟增長
            </div>
            <div id="goal8-details" class="details">
                <p>促進持久、包容和可持續的經濟增長，實現充分和生產性就業。</p>
            </div>

            <div class="goal" onclick="toggleDetails('goal9-details')">
                目標9：產業、創新與基礎設施
            </div>
            <div id="goal9-details" class="details">
                <p>建設具有韌性的基礎設施，促進可持續工業化和推動創新。</p>
            </div>

            <div class="goal" onclick="toggleDetails('goal10-details')">
                目標10：減少不平等
            </div>
            <div id="goal10-details" class="details">
                <p>在各國和國家內部減少不平等。</p>
            </div>

            <div class="goal" onclick="toggleDetails('goal11-details')">
                目標11：可持續城市與社區
            </div>
            <div id="goal11-details" class="details">
                <p>使城市和人類住區包容、安全、有韌性和可持續。</p>
            </div>

            <div class="goal" onclick="toggleDetails('goal12-details')">
                目標12：負責任消費與生產
            </div>
            <div id="goal12-details" class="details">
                <p>確保可持續的消費和生產模式。</p>
            </div>

            <div class="goal" onclick="toggleDetails('goal13-details')">
                目標13：氣候行動
            </div>
            <div id="goal13-details" class="details">
                <p>加強應對氣候變化及其影響的緊急行動。</p>
            </div>

            <div class="goal" onclick="toggleDetails('goal14-details')">
                目標14：海洋生態
            </div>
            <div id="goal14-details" class="details">
                <p>保護和可持續利用海洋和海洋資源。</p>
            </div>

            <div class="goal" onclick="toggleDetails('goal15-details')">
                目標15：陸地生態
            </div>
            <div id="goal15-details" class="details">
                <p>保護、恢復和促進可持續利用陸地生態系統，管理森林可持續利用。</p>
            </div>

            <div class="goal" onclick="toggleDetails('goal16-details')">
                目標16：和平與公正
            </div>
            <div id="goal16-details" class="details">
            
        <section>
            <h2>為什麼SDG重要？</h2>
            <p>實現SDG不僅能改善人類的生活質量，還能保護地球，確保未來的可持續發展。這些目標彼此關聯，協同作用，可以帶來積極的變化。</p>
        </section>
    </main>
    <footer>
        <p>資料來源：聯合國</p>
    </footer>
</body>
</html>
