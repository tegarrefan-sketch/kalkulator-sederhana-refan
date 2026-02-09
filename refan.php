<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            kalkulator sederhana
        </title>
        <style>
            /* Reset dasar untuk konsistensi */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            /* Styling body dengan tema retro-futuristik */
            body {
                font-family: 'Courier New', monospace; /* Font retro seperti kalkulator lama */
                background: radial-gradient(circle, #0a0a0a 0%, #1a1a1a 100%); /* Background gelap dengan gradien radial */
                color: #00ff00; /* Teks hijau neon */
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                padding: 20px;
                overflow: hidden; /* Mencegah scroll */
            }

            /* Efek partikel latar belakang (simulasi dengan pseudo-elements) */
            body::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="1" fill="%2300ff00" opacity="0.1"/></svg>') repeat;
                animation: flicker 2s infinite alternate; /* Efek flicker */
                z-index: -1;
            }

            @keyframes flicker {
                0% { opacity: 0.1; }
                100% { opacity: 0.3; }
            }

            /* Styling form sebagai kalkulator retro */
            form {
                background: linear-gradient(145deg, #222 0%, #000 100%); /* Gradien gelap */
                border: 2px solid #00ff00; /* Border neon hijau */
                border-radius: 15px;
                box-shadow: 0 0 20px rgba(0, 255, 0, 0.5), inset 0 0 20px rgba(0, 255, 0, 0.1); /* Glow effect */
                padding: 30px;
                max-width: 350px;
                width: 100%;
                text-align: center;
                display: flex;
                flex-direction: column;
                gap: 15px;
                position: relative;
                animation: pulse 3s infinite; /* Animasi pulse halus */
            }

            @keyframes pulse {
                0%, 100% { box-shadow: 0 0 20px rgba(0, 255, 0, 0.5); }
                50% { box-shadow: 0 0 30px rgba(0, 255, 0, 0.8); }
            }

            /* Styling label dengan efek glow */
            form br + * {
                font-weight: bold;
                color: #00ff00;
                text-align: left;
                margin-bottom: 5px;
                text-shadow: 0 0 5px #00ff00;
            }

            /* Styling input text dengan efek retro */
            input[type="text"] {
                padding: 12px;
                border: 1px solid #00ff00;
                border-radius: 5px;
                background: #111;
                color: #00ff00;
                font-size: 16px;
                width: 100%;
                transition: all 0.3s ease;
                box-shadow: inset 0 0 5px rgba(0, 255, 0, 0.3);
            }

            input[type="text"]:focus {
                border-color: #ff0000; /* Aksen merah saat focus */
                box-shadow: 0 0 10px rgba(255, 0, 0, 0.5), inset 0 0 10px rgba(255, 0, 0, 0.3);
                outline: none;
            }

            /* Styling select dengan tema serupa */
            select {
                padding: 12px;
                border: 1px solid #00ff00;
                border-radius: 5px;
                background: #111;
                color: #00ff00;
                font-size: 16px;
                width: 100%;
                transition: all 0.3s ease;
                box-shadow: inset 0 0 5px rgba(0, 255, 0, 0.3);
            }

            select:focus {
                border-color: #ff0000;
                box-shadow: 0 0 10px rgba(255, 0, 0, 0.5), inset 0 0 10px rgba(255, 0, 0, 0.3);
                outline: none;
            }

            /* Styling button dengan animasi unik */
            button[type="submit"] {
                padding: 15px 20px;
                background: linear-gradient(45deg, #00ff00 0%, #ff0000 100%);
                color: #000;
                border: none;
                border-radius: 10px;
                font-size: 20px;
                font-weight: bold;
                cursor: pointer;
                transition: all 0.3s ease;
                width: 100%;
                text-shadow: 0 0 5px #fff;
                animation: bounce 2s infinite; /* Animasi bounce halus */
            }

            @keyframes bounce {
                0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
                40% { transform: translateY(-5px); }
                60% { transform: translateY(-3px); }
            }

            button[type="submit"]:hover {
                background: linear-gradient(45deg, #ff0000 0%, #00ff00 100%);
                transform: scale(1.05);
                box-shadow: 0 0 15px rgba(255, 0, 0, 0.8);
            }

            button[type="submit"]:active {
                transform: scale(0.95);
            }

            /* Styling hasil output dengan efek matrix-like */
            .result {
                margin-top: 20px;
                padding: 20px;
                background: #000;
                border: 1px solid #00ff00;
                border-radius: 10px;
                font-size: 18px;
                color: #00ff00;
                text-align: center;
                max-width: 350px;
                width: 100%;
                margin-left: auto;
                margin-right: auto;
                box-shadow: 0 0 10px rgba(0, 255, 0, 0.5);
                animation: type 1s steps(40, end); /* Efek mengetik */
            }

            @keyframes type {
                from { width: 0; }
                to { width: 100%; }
            }

            /* Responsivitas untuk layar kecil */
            @media (max-width: 480px) {
                form {
                    padding: 20px;
                    max-width: 100%;
                }
                
                input[type="text"], select, button[type="submit"] {
                    font-size: 14px;
                }
                
                .result {
                    font-size: 16px;
                    padding: 15px;
                }
            }
        </style>
    </head>
    <body>
        <form action="" method="post">
            Angka 1 <input type="text" name="Angka1">
            <br>
            Angka 2 <input type="text " name="Angka2">
            <br>   
            Operator <select name="Operator" >
            <option value="+">+</option>
              <option value="-">-</option>
                <option value="/">/</option>
              <option value="*">x</option>

                        </select>  
                        <button type="submit" name="eksekusi">=</button>
           </form>
           <div class="result">
           <?php
           if(isset($_POST['eksekusi'])) {
            $Angka1 = $_POST['Angka1'];
             $Angka2 = $_POST['Angka2'];
              $Operator = $_POST['Operator'];
              $_hasil = 0;
              
               if ($Operator == "+") {
                $hasil =$Angka1 + $Angka2 ;
              }
               else if ($Operator == "-") {
                $hasil =$Angka1 - $Angka2 ;
              }
               else if ($Operator == "/") {
                $hasil =$Angka1 / $Angka2 ;
              }
             else if ($Operator == "*") {
                $hasil =$Angka1 * $Angka2 ;
              }
              
           echo "<br>";
           echo "$Angka1 $Operator $Angka2 <br>";
           echo "=$hasil";
           } ?>
           </div>
    </body>
</html>