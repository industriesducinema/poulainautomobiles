
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/book.css">
    <title>Presse Automobile </title>
    <script>
var right = document.getElementsByClassName("right");
    var si = right.length;
    var z=1;
    turnRight();
    function turnRight()
    {
        if(si>=1){
            si--;
        }
        else{
            si=right.length-1;
            function sttmot(i){
                setTimeout(function(){right[i].style.zIndex="auto";},300);
            }
            for(var i=0;i<right.length;i++){
                right[i].className="right";
                sttmot(i);
                z=1;
            }
        }
        right[si].classList.add("flip");
        z++;
        right[si].style.zIndex=z;
    }
    function turnLeft()
    {
        if(si<right.length){
            si++;
        }
        else{
            si=1;
            for(var i=right.length-1;i>0;i--){
                right[i].classList.add("flip");
                right[i].style.zIndex=right.length+1-i;
            }
        }
        right[si-1].className="right";
        setTimeout(function(){right[si-1].style.zIndex="auto";},350);
    }
    </script>
</head>
<body>
    <div class="container">
        <a href="index.php" class="close">
        <header>
          <div class="logo-with-img">
          <a href="index.php">
            <img src="image/image (1).png" alt="Poulain Automobiles"></a></div>
              </header>
  
<div class="book-section">
       <p>Illustrations par <a href="index17.php" target="_blank">Poulain Automobiles</a></p>
        <div class="container">
            <div class="right">
                <figure class="back" style="background-image: url(https://virtualmedia.bentleymotors.com/bentley-my2024-3S4/iris?COSY-EU-100-1713VV%25lXm0kYARNstL2NNiZvTqCKLz9UkJmmlMx%25GxigKTXhKe4W77XfL61wADBV5m5aasGw00h7RRAMetIcGw355IPFZtrYtoPeopG7a9e0JGRIza3r7258XB6PnYEEOG837Cm0kYyhzzSUfNfBxpOdccozitSUmEinMoppzR2veIIrdGUQNDEHwKzjvvjdz8rMTH0kY99AFFkTrVVjJ9%25beyyJk31xVkqkawV5QHHakdP6y7tn1YFXUUNfXR90POBrrXdPT66tstjNN5I5yqq9akQmETTkXtJxPssw3cIfSoo2%25PtSGllvEPcGQ44rgFHQD11FNGrDVttOBQLzAccAdgpjWmmWGWb9IiiIQBQJYKK%256kIkwCCEJeC42uugUJx1vbb8uxPvrNN5OX9kQBBhXuEmOddp3ieiAeefy%25lKWJJMZHvP9UURH%25hu%25aa07W6%25EXXYnl3vH33qLyYg8yyTFdi85ZZsIluiiIudRffQV9P22UFFSnn4hwDuugk8V00zPgAFF3leFxxcikpBBhJ2jTTkg2zWWHSrDGGKpTFJJMHTAllvPvgEELRiVVVbOJ1XXY6pMttOfAp55PJaW99d217ZZsQE8iiI3%254ffQX9t22UgD6nn4xyEuug9vX00zrChFF3jJ%25xxcNoxBBhpSRTTklhXWWHpseGGKDuEJJMLKxllvFv6EELstRVVbg6xXXYZ5GttOBZT55P4OI99dMI7ZZsoRHiiI3iOffQexg22UgX4nn4BGNuugBLr00zWAWFF3YWkxxcffqBBhJOKTTkw0MWWHUXqGGKIGQJJMRAlllvzSYEELRuRVVbI2zXXYQl7ttOAXZ55PqXK99dKXkZZsox6ii4);" style="width: 100%;" >Intérieur Mulliner</figure> 
                <figure class="front" style="background-image: url(https://virtualmedia.bentleymotors.com/bentley-my2024-3S4/iris?COSY-EU-100-1713VV%25lXm0kYARNstL2NNiZvTqCKLz9UkJmmlMx%25GxigKTXhKe4W77XfL61wADBV5m5aasGw00h7RRAMetIcGNp55IPFZtrYtoPeopG7a9e0JGRIza3r7258XB6PnYEEOG837Cm0kYyhzzSUfNfBxpOdccozitSUmEinMoppzRL1GIIrdGUQNDEHwKzgvvjdz8rMTH0kY99AFFkTrVVjJ9%25beyyJk31xVkqkawV5QHHakdP6y7tn1ujTUUNfXR90POBrrXdPT66tstZNN5I5iqq9Q9mAAZUZpSSi8K4wXGGK59ETsQQChkUnoDDuas9olVVbXskl4zzN3BM41jjBAlN1t99dW4YcekkeI37mJwwJlJOiU22U4W4EPvvaqKUKCrrXE%25rzuFF3gETjbOOy8gPbNAAZOsoNBWWHAoQwdII7JpCut%25%25npAyvJEELfWwJUgg6MIYFa88xRO5OX55P0ZRX3hhSYHwWyppGqTJtNffQTHx%25HMMDsy4H7RRVow0JT00zlYVnLYYja5AL6qq9Zw%25AAZ%255QSSiCNteefExYoo211h%25%25nBsMDDuTbRaa05uc11F7k188xSFNjjBeWsyyT7%25OmmW0%25FppGkgvwwJHjf77lIpjCCEJpkRRVZVFrrXgo666t9CYNN53IEqq9%25kIAAZCbwSSiDYUeefnrOoo2Bv0%25%25nZ6CDDuqeAaa0xbc11Fms688xJFqjjBotAyyTczJmmWsrbppGkLpwwJUM377l1hMCCENlSRRV4uLrrXOyq66t9XwNN5p5kqq9uecAAZTkwSSiDoreef7DCoo2Bf0%25%25nt0zDDubcVaa0Gaf11FLwT88xTSBjjBQ59yyTC6KmmWCZkppGacxwwJzA477lNbNCCEcZBRRVuq5rrXmmb66tS0ZNN5hCiqq9GDbAAZTAWSSilLteefMOooo2VP0%25%25nlpqDDuvRvaa0G7X11FJ%25K88xP1mjjBO1fyyTf1ZmmWINbppE);">Cabriolet</figure>
               </div>   
            <div class="right">
                <figure class="back" style="background-image: url(https://virtualmedia.bentleymotors.com/bentley-my2024-3S4/iris?COSY-EU-100-1713VV%25lXm0kYARNstL2NNiZvTqCKLz9UkJmmlMx%25GxigKTXhKe4W77XfL61wADBV5m5aasGw00h7RRAMetIcGNp55IPFZtrYtoPeopG7a9e0JGRIza3r7258XB6PnYEEOG837Cm0kYyhzzSUfNfBxpOdccozitSUmEinMoppzRL1GIIrdGUQNDEHwKzgvvjdz8rMTH0kY99AFFkTrVVjJ9%25beyyJk31xVkqkawV5QHHakdP6y7tn1ujTUUNfXR90POBrrXdPT66tstZNN5I5iqq9Q9mAAZUZpSSi8K4wXGGK59ETsQQChkUnoDDuas9olVVbXskl4zzN3BM41jjBAlN1t99dW4YcekkeI37mJwwJlJOiU22U4W4EPvvaqKUKCrrXE%25rzuFF3gETjbOOy8gPbNAAZOsoNBWWHAoQwdII7JpCut%25%25npAyvJEELfWwJUgg6MIYFa88xRO5OX55P0ZRX3hhSYHwWyppGqTJtNffQTHx%25HMMDsy4H7RRVow0JT00zlYVnLYYja5AL6qq9Zw%25AAZ%255QSSiCNteefExYoo211h%25%25nBsMDDuTbRaa05uc11F7k188xSFNjjBeWsyyT7%25OmmW0%25FppGkgvwwJHjf77lIpjCCEJpkRRVZVFrrXgo666t9CYNN53IEqq9%25kIAAZCbwSSiDYUeefnrOoo2Bv0%25%25nZ6CDDuqeAaa0xbc11Fms688xJFqjjBotAyyTczJmmWsrbppGkLpwwJUM377l1hMCCENlSRRV4uLrrXOyq66t9XwNN5p5kqq9uecAAZTkwSSiDoreef7DCoo2Bf0%25%25nt0zDDubcVaa0Gaf11FLwT88xTSBjjBQ59yyTC6KmmWCZkppGacxwwJzA477lNbNCCEcZBRRVuq5rrXmmb66tS0ZNN5hCiqq9GDbAAZTAWSSilLteefMOooo2VP0%25%25nlpqDDuvRvaa0G7X11FJ%25K88xP1mjjBO1fyyTf1ZmmWINbppE);">Mulliner</figure> 
                <figure class="front" style="background-image: url(https://virtualmedia.bentleymotors.com/bentley-my2024-3S4/iris?COSY-EU-100-1713VV%25lXm0kYARNstL2NNiZvTqCKLz9UkJmmlMx%25GxigKTXhKe4W77XfL61wADBV5m5aasGw00h7RRAMetIcGNp55IPFZtrYtoPeopG7a9e0JGRIza3r7258XB6PnYEEOG837Cm0kYyhzzSUfNfBxpOdccozitSUmEinMoppzRL1GIIrdGUQNDEHwKzNvvjdz8rMTH0kY99AFFkTrVVjJ9%25beyyJk31xVkqkawV5QHHakdP6y7tn1ujTUUNfXR90POBrrXdPT66tstZNN5I5iqq9Q9mAAZUZpSSi8K4wXGGK59ETsQQChkUnoDDuas9olVVbXskl4zzN3BM41jjBAlN1t99dW4YcekkeI37mJwwJlJOiU22U4W4EPvvaqKUKCrrXE%25rzuFF3gETjbOOy8gPbNAAZOsoNBWWHAoQwdII7JpCut%25%25npAyvJEELfWwJUgg6MIYFa88xRO5OX55P0ZRX3hhSYHwWyppGqTJtNffQTHx%25HMMDsy4H7RRVow0JT00zlYVnLYYja5AL6qq9Zw%25AAZ%255QSSiCNteefExYoo211h%25%25nBsMDDuTbRaa05uc11F7k188xSFNjjBeWsyyT7%25OmmW0%25FppGkgvwwJHjf77lIpjCCEJpkRRVZVFrrXgo666t9CYNN53IEqq9%25kIAAZCbwSSiDYUeefnrOoo2Bv0%25%25nZ6CDDuqeAaa0xbc11Fms688xJFqjjBotAyyTczJmmWsrbppGkLpwwJUM377l1hMCCENlSRRV4uLrrXOyq66t9XwNN5p5kqq9uecAAZTkwSSiDoreef7DCoo2Bf0%25%25nt0zDDubcVaa0Gaf11FLwT88xTSBjjBQ59yyTC6KmmWCZkppGacxwwJzA477lNbNCCEcZBRRVuq5rrXmmb66tS0ZNN5hCiqq9GDbAAZTAWSSilLteefMOooo2VP0%25%25nlpqDDuvRvaa0G7X11FJ%25K88xP1mjjBO1fyyTf1ZmmWINbppE);">Gtc</figure>
                </div>
            <div class="right">
                <figure class="back" style="background-image: url(https://virtualmedia.bentleymotors.com/bentley-my2024-3S4/iris?COSY-EU-100-1713VV%25lXm0kYARNstL2NNiZvTqCKLz9UkJmmlMx%25GxigKTXhKe4W77XfL61wADBV5m5aasGw00h7RRAMetIcGNp55IPFZtrYtoPeopG7a9e0JGRIza3r7258XB6PnYEEOG837Cm0kYyhzzSUfNfBxpOdccozitSUmEinMoppzRL1GIIrdGUQNDEHwKzNvvjdz8rMTH0kY99AFFkTrVVjJ9%25beyyJk31xVkqkawV5QHHakdP6y7tn1ujTUUNfXR90POBrrXdPT66tstZNN5I5iqq9Q9mAAZUZpSSi8K4wXGGK59ETsQQChkUnoDDuas9olVVbXskl4zzN3BM41jjBAlN1t99dW4YcekkeI37mJwwJlJOiU22U4W4EPvvaqKUKCrrXE%25rzuFF3gETjbOOy8gPbNAAZOsoNBWWHAoQwdII7JpCut%25%25npAyvJEELfWwJUgg6MIYFa88xRO5OX55P0ZRX3hhSYHwWyppGqTJtNffQTHx%25HMMDsy4H7RRVow0JT00zlYVnLYYja5AL6qq9Zw%25AAZ%255QSSiCNteefExYoo211h%25%25nBsMDDuTbRaa05uc11F7k188xSFNjjBeWsyyT7%25OmmW0%25FppGkgvwwJHjf77lIpjCCEJpkRRVZVFrrXgo666t9CYNN53IEqq9%25kIAAZCbwSSiDYUeefnrOoo2Bv0%25%25nZ6CDDuqeAaa0xbc11Fms688xJFqjjBotAyyTczJmmWsrbppGkLpwwJUM377l1hMCCENlSRRV4uLrrXOyq66t9XwNN5p5kqq9uecAAZTkwSSiDoreef7DCoo2Bf0%25%25nt0zDDubcVaa0Gaf11FLwT88xTSBjjBQ59yyTC6KmmWCZkppGacxwwJzA477lNbNCCEcZBRRVuq5rrXmmb66tS0ZNN5hCiqq9GDbAAZTAWSSilLteefMOooo2VP0%25%25nlpqDDuvRvaa0G7X11FJ%25K88xP1mjjBO1fyyTf1ZmmWINbppE);">Bentley</figure> 
                <figure class="front" style="background-image: url(https://virtualmedia.bentleymotors.com/bentley-my2024-ZG2/iris?COSY-EU-100-1713VV%25lXm0kYARNstL2NNiZvTqCKLz9UkJmmlMx%25GxigKTXhKe4W77XfL61wADBV5m5aasGw00h7RRAMetIcGNp55IPFZtrYtoPeopG7a9e0JGRIza3Jj258X6ztFOEEOG837Cm0kYyhzzSUfNfBxpOdccozitSUmEinMoppzR41RIIrdGUQNDEHwKzNvvjdz8rMTH0kY99AFFkTrVVjJ9%25beyyJk31xVkqkawjhiHHakdP6y7tn1ujTUUNfXR90PaXrrXd1t66tstZNN5I5iqq9Q9mAAZUZpSSi8K4wXGGK5CU23QQChkgsoDDupwaLlVVbH6fIfzzN7vg41jjBy42Yi99dZ4vtckkeHJFGNwwJ7Ulyi22UnaTiKvvagiggSrrX83JCuFF35nPubOOymyEu4AAZlkypVWWH4oKBdII71nXde%25%25nte7dmEELcJVJUgg6RMgFa88x0RmOX55P8miA3hhS5iwWyppGhQ2IZffQ7sUZPMMDT7dZdRRV6pSgn00zxKQtIYYjPul56qq91RDhxTTkt08pPsswcYKK8oo2mMlMGllviVmuh44rKz80D11FCuxjAttOuz2qzccAbDdTjmmWNIAs9iiIB%25FokKK%25dhCSNCCEV8qRRVqlOrrXy7J66tSSUNN52L3qq9nkyAAZJ9QSSiFqeeefjgeoo2JD%25%25%25n6pLDDujqMaa0iqf11FgsI88xbaojjBQoqyyTx1gmmWVWfppGsNwwwJEyK77lQYTCCEqgYRRVyH8rrXAKP66t9pMNN5nhiqq9VwyAAZC6RSSi2HUeefabjoo2YYa%25%25nNJRDDuUIxaa0bpH11Fgkn88xS53jjBdhcyyT7BrmmWdZkppGJcvwwJvaR77lVJjCCE8EzRRViN4rrXAYb66tSqwNN5KPGqq9mIAAAZ09QSSiE2UeefMgJoo2Bo9%25%25nKyFDDuFN0aa058B11FsXM88xwRkjjBw5cyyT%25z0mmW4NQppGrvrwwJz5F77l26XCCEjjvRRVqn5rrX5CH66tc7ZNN5W%25Lqq9BqTAAZHbXSSilYseefGy0oo2K7K%25%25nTpEDDub%258aa0L%25911F9%25a88xPRMjjBQ4HyyTVTKmml);">FLYING SPUR</figure>
                </div>
            <div class="right">
              <figure class="back" style="background-image: url(https://virtualmedia.bentleymotors.com/bentley-my2024-ZG2/iris?COSY-EU-100-1713VV%25lXm0kYARNstL2NNiZvTqCKLz9UkJmmlMx%25GxigKTXhKe4W77XfL61wADBV5m5aasGw00h7RRAMetIcGNp55IPFZtrYtoPeopG7a9e0JGRIza3Jj258X6ztFOEEOG837Cm0kYyhzzSUfNfBxpOdccozitSUmEinMoppzR41RIIrdGUQNDEHwKzNvvjdz8rMTH0kY99AFFkTrVVjJ9%25beyyJk31xVkqkawjhiHHakdP6y7tn1ujTUUNfXR90PaXrrXd1t66tstZNN5I5iqq9Q9mAAZUZpSSi8K4wXGGK5CU23QQChkgsoDDupwaLlVVbH6fIfzzN7vg41jjBy42Yi99dZ4vtckkeHJFGNwwJ7Ulyi22UnaTiKvvagiggSrrX83JCuFF35nPubOOymyEu4AAZlkypVWWH4oKBdII71nXde%25%25nte7dmEELcJVJUgg6RMgFa88x0RmOX55P8miA3hhS5iwWyppGhQ2IZffQ7sUZPMMDT7dZdRRV6pSgn00zxKQtIYYjPul56qq91RDhxTTkt08pPsswcYKK8oo2mMlMGllviVmuh44rKz80D11FCuxjAttOuz2qzccAbDdTjmmWNIAs9iiIB%25FokKK%25dhCSNCCEV8qRRVqlOrrXy7J66tSSUNN52L3qq9nkyAAZJ9QSSiFqeeefjgeoo2JD%25%25%25n6pLDDujqMaa0iqf11FgsI88xbaojjBQoqyyTx1gmmWVWfppGsNwwwJEyK77lQYTCCEqgYRRVyH8rrXAKP66t9pMNN5nhiqq9VwyAAZC6RSSi2HUeefabjoo2YYa%25%25nNJRDDuUIxaa0bpH11Fgkn88xS53jjBdhcyyT7BrmmWdZkppGJcvwwJvaR77lVJjCCE8EzRRViN4rrXAYb66tSqwNN5KPGqq9mIAAAZ09QSSiE2UeefMgJoo2Bo9%25%25nKyFDDuFN0aa058B11FsXM88xwRkjjBw5cyyT%25z0mmW4NQppGrvrwwJz5F77l26XCCEjjvRRVqn5rrX5CH66tc7ZNN5W%25Lqq9BqTAAZHbXSSilYseefGy0oo2K7K%25%25nTpEDDub%258aa0L%25911F9%25a88xPRMjjBQ4HyyTVTKmml);">MULLINER W12</figure> 
              <figure class="front" style="background-image: url(https://pics.porsche.com/rtt/iris?COSY-EU-100-1713c6eK12UC31P3T5JOCU%25hjdmiTDDmvMXlHWguCuq6Q44RtRHo9ZAaDjYu5P3I7tGW3rNbZJNKXv9U7KcQQ%25yFN5tFAsXrw4r3wo0qnqZr8MCnR4i84tV2YN2OmNyW1QGWgCWKMUuyO8c7KM86lhQ58DRgfNa4KyXMj5%25VEhONjmLU4yxc7gr9Ti36KI5mh5VMCWK1mqb1vH7%25cdJGUCbEeBV7FVWAj1uKYQ9bW0O7PUWf3BrM);">911 Turbo s</figure>
              </div>
              <div class="right">
                <figure class="back" style="background-image: url(https://pics.porsche.com/rtt/iris?COSY-EU-100-1713c6eK12UC31P3T5JOCU%25hjdmiTDDmvMXlHWguCuq6Q44RtRHo9ZAaDjYu5P3I7tGW3rNbZJNKXv9U7KcQQ%25yFN5tFAsXrw4r3wo0qnqZr8MCnR4i84tV2YN2OmNyW1QGWgCWKMUuyO8c7KM86lhQ58DRgfNa4KyXMj5%25VEhONjmLU4yxc7gr9Ti36KI5mh5VMCWK1mqb1vH7%25cdJGUCbEeBV7FVWAj1uKYQ9bW0O7PUWf3BrM);">2023</figure> 
                <figure class="front" style="background-image: url(https://pics.porsche.com/rtt/iris?COSY-EU-100-1713c6eK12UC31P3T5JOCU%25hjdmiTDDmvMXlHWguCuq6Q44RtRHo9ZAaDjYu5P3I7tGW3rNbZJNKXv9Z7KcQQ%25yFN5tFAsXrw4r3wo0qnqZr8MCnR4i84tV2YN2OmNyW1QGWgCWKMUuyO8c7KM86lhQ58DRgfNa4KyXMj5%25VEhONjmLU4yxc7gr9Ti36KI5mh5VMCWK1mqb1vH7%25cdJGUCbEeBV7FVWAj1uKYQ9bW0O7PUWf3BrM);">Cabriolet</figure>
                </div>
            <div class="right">
              <figure class="back" style="background-image: url(https://pics.porsche.com/rtt/iris?COSY-EU-100-1713c6eK12UC31P3T5JOCU%25hjdmiTDDmvMXlHWguCuq6Q44RtRHo9ZAaDjYu5P3I7tGW3rNbZJNKXv9Z7KcQQ%25yFN5tFAsXrw4r3wo0qnqZr8MCnR4i84tV2YN2OmNyW1QGWgCWKMUuyO8c7KM86lhQ58DRgfNa4KyXMj5%25VEhONjmLU4yxc7gr9Ti36KI5mh5VMCWK1mqb1vH7%25cdJGUCbEeBV7FVWAj1uKYQ9bW0O7PUWf3BrM);">Turbo S</figure> 
              <figure class="front" style="background-image: url(https://virtualmedia.bentleymotors.com/bentley-my2024-3S3/iris?COSY-EU-100-1713VV%25lXm0kYARNstL2NNiZvTqCKLz9UkJmmlMx%25GxigKTXhKe4W77XfL61wADBV5m5aasGw00h7RRAMetIcGNp55IPFZtrYtoPeopG7a9e0JGRIzafrz258XO6rn0EEOG837Cm0kYyhzzSUfNfBxpOdccozitSUmEinMoppzRvvbIIrdGUQNDEHwKzCvvjdz8rMTH0kY99AFFkTrVVjJ9%25beyyJk31xVkqkawV5gHHakdP6y7tn1ujTUUNfXR90POBrrXdPT66tstZNN5I5iqq9Q9mAAZUZpSSi8K4wXGGK59ETsQQChkUnoDDuas9olVVbXskl4zzN3BM41jjBAlN1t99dW4YinkkeI37KLwwJlJOC622U4W4EPvvaqKUlNrrXE%25rzuFF3gETjbOOy8gPbNAAZOsoNBWWHAoQwdII7JpCdy%25%25npAyvJEELfWwJUgg6MIYFa88xRO5OX55P0ZRNHhhSYHwWyppGqTJ3PffQTHx%25HMMDsy4J6RRVow0JT00zlYVaPYYja5AL6qq9Zw%25AAZ%255QSSiCNteefExYoo2vlz%25%25n88kDDuTIvaa0WYr11F90h88xCH8jjB5myyyTo6smmWCDPppGFDxwwJHzL77lKy2CCEQwyRRVhy1rrXE7K66tftBNN53Dqqq9irPAAZhUXSSiaKUeefrOCoo21Pg%25%25n0NdDDuWbxaa0fqr11FS%25e88xTOkjjBwQRyyTEBSmmWD9eppGkcEwwJQNO77lKYnCCEgLhRRVjHLrrXAVo66tzFYNN5dpSqq9i5CAAZ7ZKSSiF%25keefGKCoo21DN%25%25nR1rDDuWn3aa09xc11FOkt88xl8njjBYCGyyTGoWmmW4ZippGrqvwwJrfK77l8kTCCEcezRRVAOArrXkfW66tFSZNN5wwOqq9oxfAAZfNLSSiK6neefE8Poo2Jol%25%25nXOZDDubsaaa05IB11FXCe88xYNYjjBEr9yyTV1LmmWIy7ppGsyuwwJuy277l4SPCCEcmhRR5);">MULLINER W12</figure>
              </div>
           <div class="right">
                <figure class="back" style="background-image: url(https://virtualmedia.bentleymotors.com/bentley-my2024-3S3/iris?COSY-EU-100-1713VV%25lXm0kYARNstL2NNiZvTqCKLz9UkJmmlMx%25GxigKTXhKe4W77XfL61wADBV5m5aasGw00h7RRAMetIcGNp55IPFZtrYtoPeopG7a9e0JGRIzafrz258XO6rn0EEOG837Cm0kYyhzzSUfNfBxpOdccozitSUmEinMoppzRvvbIIrdGUQNDEHwKzCvvjdz8rMTH0kY99AFFkTrVVjJ9%25beyyJk31xVkqkawV5gHHakdP6y7tn1ujTUUNfXR90POBrrXdPT66tstZNN5I5iqq9Q9mAAZUZpSSi8K4wXGGK59ETsQQChkUnoDDuas9olVVbXskl4zzN3BM41jjBAlN1t99dW4YinkkeI37KLwwJlJOC622U4W4EPvvaqKUlNrrXE%25rzuFF3gETjbOOy8gPbNAAZOsoNBWWHAoQwdII7JpCdy%25%25npAyvJEELfWwJUgg6MIYFa88xRO5OX55P0ZRNHhhSYHwWyppGqTJ3PffQTHx%25HMMDsy4J6RRVow0JT00zlYVaPYYja5AL6qq9Zw%25AAZ%255QSSiCNteefExYoo2vlz%25%25n88kDDuTIvaa0WYr11F90h88xCH8jjB5myyyTo6smmWCDPppGFDxwwJHzL77lKy2CCEQwyRRVhy1rrXE7K66tftBNN53Dqqq9irPAAZhUXSSiaKUeefrOCoo21Pg%25%25n0NdDDuWbxaa0fqr11FS%25e88xTOkjjBwQRyyTEBSmmWD9eppGkcEwwJQNO77lKYnCCEgLhRRVjHLrrXAVo66tzFYNN5dpSqq9i5CAAZ7ZKSSiF%25keefGKCoo21DN%25%25nR1rDDuWn3aa09xc11FOkt88xl8njjBYCGyyTGoWmmW4ZippGrqvwwJrfK77l8kTCCEcezRRVAOArrXkfW66tFSZNN5wwOqq9oxfAAZfNLSSiK6neefE8Poo2Jol%25%25nXOZDDubsaaa05IB11FXCe88xYNYjjBEr9yyTV1LmmWIy7ppGsyuwwJuy277l4SPCCEcmhRR5);">CONTINENTAL GT</figure>
                <figure class="front" style="background-image: url(https://virtualmedia.bentleymotors.com/bentley-my2024-3S3/iris?COSY-EU-100-1713VV%25lXm0kYARNstL2NNiZvTqCKLz9UkJmmlMx%25GxigKTXhKe4W77XfL61wADBV5m5aasGw00h7RRAMetIcGNp55IPFZtrYtoPeopG7a9e0JGRIzafrz258XO6rn0EEOG837Cm0kYyhzzSUfNfBxpOdccozitSUmEinMoppzR6iGIIrdGUQNDEHwKzNvvjdz8rMTH0kY99AFFkTrVVjJ9%25beyyJk31xVkqkawV5gHHakdP6y7tn1ujTUUNfXR90POBrrXdPT66tstZNN5I5iqq9Q9mAAZUZpSSi8K4wXGGK59ETsQQChkUnoDDuas9olVVbXskl4zzN3BM41jjBAlN1t99dW4YcekkeI37mJwwJlJOiU22U4W4EPvvaqKUlNrrXE%25rzuFF3gETjbOOy8gPbNAAZOsoNBWWHAoQwdII7JpCut%25%25npAyvJEELfWwJUgg6MIYFa88xRO5OX55P0ZRNHhhSYHwWyppGqTJtNffQTHx%25HMMDsy4J6RRVow0JT00zlYVaPYYja5AL6qq9Zw%25AAZ%255QSSiCNteefExYoo2vlz%25%25n88kDDuTIvaa0WYr11F90h88xCH8jjB5myyyTo6smmWCDPppGFDxwwJHzL77lKy2CCEQwyRRVhy1rrXE7K66tftBNN53Dqqq9irPAAZhUXSSiaKUeefrOCoo21Pg%25%25n0NdDDuWbxaa0fqr11FS%25e88xTOkjjBwQRyyTEBSmmWD9eppGkcEwwJQNO77lKYnCCEgLhRRVjHLrrXAVo66tzFYNN5dpSqq9i5CAAZ7ZKSSiF%25keefGKCoo21DN%25%25nR1rDDuWn3aa09xc11FOkt88xl8njjBYCGyyTGoWmmW4ZippGrqvwwJrfK77l8kTCCEcezRRVAOArrXkfW66tFSZNN5wwOqq9oxfAAZfNLSSiK6neefE8Poo2Jol%25%25nXOZDDubsaaa05IB11FXCe88xYNYjjBEr9yyTV1LmmWIy7ppGsyuwwJuy277l4SPCCEcmhRR5);">SPEED EDITION 12 W12</figure>
                </div>
           <div class="right">
               <figure class="back" style="background-image: url(https://virtualmedia.bentleymotors.com/bentley-my2024-3S3/iris?COSY-EU-100-1713VV%25lXm0kYARNstL2NNiZvTqCKLz9UkJmmlMx%25GxigKTXhKe4W77XfL61wADBV5m5aasGw00h7RRAMetIcGNp55IPFZtrYtoPeopG7a9e0JGRIzafrz258XO6rn0EEOG837Cm0kYyhzzSUfNfBxpOdccozitSUmEinMoppzR6iGIIrdGUQNDEHwKzNvvjdz8rMTH0kY99AFFkTrVVjJ9%25beyyJk31xVkqkawV5gHHakdP6y7tn1ujTUUNfXR90POBrrXdPT66tstZNN5I5iqq9Q9mAAZUZpSSi8K4wXGGK59ETsQQChkUnoDDuas9olVVbXskl4zzN3BM41jjBAlN1t99dW4YcekkeI37mJwwJlJOiU22U4W4EPvvaqKUlNrrXE%25rzuFF3gETjbOOy8gPbNAAZOsoNBWWHAoQwdII7JpCut%25%25npAyvJEELfWwJUgg6MIYFa88xRO5OX55P0ZRNHhhSYHwWyppGqTJtNffQTHx%25HMMDsy4J6RRVow0JT00zlYVaPYYja5AL6qq9Zw%25AAZ%255QSSiCNteefExYoo2vlz%25%25n88kDDuTIvaa0WYr11F90h88xCH8jjB5myyyTo6smmWCDPppGFDxwwJHzL77lKy2CCEQwyRRVhy1rrXE7K66tftBNN53Dqqq9irPAAZhUXSSiaKUeefrOCoo21Pg%25%25n0NdDDuWbxaa0fqr11FS%25e88xTOkjjBwQRyyTEBSmmWD9eppGkcEwwJQNO77lKYnCCEgLhRRVjHLrrXAVo66tzFYNN5dpSqq9i5CAAZ7ZKSSiF%25keefGKCoo21DN%25%25nR1rDDuWn3aa09xc11FOkt88xl8njjBYCGyyTGoWmmW4ZippGrqvwwJrfK77l8kTCCEcezRRVAOArrXkfW66tFSZNN5wwOqq9oxfAAZfNLSSiK6neefE8Poo2Jol%25%25nXOZDDubsaaa05IB11FXCe88xYNYjjBEr9yyTV1LmmWIy7ppGsyuwwJuy277l4SPCCEcmhRR5);">CONTINENTAL GT Mulliner</figure>
               <figure class="front" style="background-image: url(https://pics.porsche.com/rtt/iris?COSY-EU-100-1713c6eK12UC31P3T5JOCU%25hjdmiTDDmvMXlHWguCuq6Q44RtRHo9ZAaDjYu5P3I7tGW3rNbZJNKXv9Z7KcQQ%25yFN5tFAsXrw4r3wo0qnqZr8MCnR4i84tV2YN2OmNyW1QGWgCWKMUuyO3L7KMHfehQ5YCpNFouiKyXd67Q9%25tenfIOuw6eu8q%25LAlmPkfeSvg3%25n3IaGuyOisMeIzR%25BWIJCgN2);">911 GT3 RS</figure>
              </div>
           <div class="right">
               <figure class="back" style="background-image: url(https://pics.porsche.com/rtt/iris?COSY-EU-100-1713c6eK12UC31P3T5JOCU%25hjdmiTDDmvMXlHWguCuq6Q44RtRHo9ZAaDjYu5P3I7tGW3rNbZJNKXv9Z7KcQQ%25yFN5tFAsXrw4r3wo0qnqZr8MCnR4i84tV2YN2OmNyW1QGWgCWKMUuyO3L7KMHfehQ5YCpNFouiKyXd67Q9%25tenfIOuw6eu8q%25LAlmPkfeSvg3%25n3IaGuyOisMeIzR%25BWIJCgN2);">Porsche</figure>
               <figure class="front" style="background-image: url(https://pics.porsche.com/rtt/iris?COSY-EU-100-1713c6eK12UC31P3T5JOCU%25hjdmiTDDmvMXlHWguCuq6Q44RtRHo9ZAaDjYu5P3I7tGW3rNbZJNKXv9A7KcQQ%25yFN5tFAsXrw4r3wo0qnqZr8MCnR4i84tV2YN2OmNyW1QGWgCWKMUuyO3L7KMHfehQ5YCpNFouiKyXd67Q9%25tenfIOuw6eu8q%25LAlmPkfeSvg3%25n3IaGuyOisMeIzR%25BWIJCgN2);">6</figure>
              </div>
           <div class="right">
              <figure class="back" style="background-image: url(https://pics.porsche.com/rtt/iris?COSY-EU-100-1713c6eK12UC31P3T5JOCU%25hjdmiTDDmvMXlHWguCuq6Q44RtRHo9ZAaDjYu5P3I7tGW3rNbZJNKXv9A7KcQQ%25yFN5tFAsXrw4r3wo0qnqZr8MCnR4i84tV2YN2OmNyW1QGWgCWKMUuyO3L7KMHfehQ5YCpNFouiKyXd67Q9%25tenfIOuw6eu8q%25LAlmPkfeSvg3%25n3IaGuyOisMeIzR%25BWIJCgN2);">Edition</figure>
              <figure class="front" style="background-image: url(https://pics.porsche.com/rtt/iris?COSY-EU-100-1713c6eK12UC31P3T5JOCU%25hjdmiTDDmvMXlHWguCuq6Q44RtRHo9ZAaDjYu5P3I7tGW3rNbZJNKXv9A7KcQQ%25yFN5tFAsXrw4r3wo0qnqZr8MCnR4i84tV2YN2OmNyW1QGWgCWKMUuyO3L7KMHfehQ5YCqgfNsou0DyJGcT891WfIOuw6eu8q%25LAlmPkfeSvg3%25n3IaGuyOisMeIzR%25BWIJCgN2);">Rouge</figure>
              </div>
           <div class="right">
               <figure class="back" style="background-image: url(https://pics.porsche.com/rtt/iris?COSY-EU-100-1713c6eK12UC31P3T5JOCU%25hjdmiTDDmvMXlHWguCuq6Q44RtRHo9ZAaDjYu5P3I7tGW3rNbZJNKXv9A7KcQQ%25yFN5tFAsXrw4r3wo0qnqZr8MCnR4i84tV2YN2OmNyW1QGWgCWKMUuyO3L7KMHfehQ5YCqgfNsou0DyJGcT891WfIOuw6eu8q%25LAlmPkfeSvg3%25n3IaGuyOisMeIzR%25BWIJCgN2);">GT3</figure>
               <figure class="front" style="background-image: url(https://pics.porsche.com/rtt/iris?COSY-EU-100-1713c6eK12UC31P3T5JOCU%25hjdmiTDDmvMXlHWguCuq6Q44RtRHo9ZAaDjYu5P3I7tGW3rNbZJNKXv9Z7KcQQ%25yFN5tFAsXrw4r3wo0qnqZr8MCnR4i84tV2YN2OmNyW1QGWgCWKMUuyO3L7KMHfehQ5YCqgfNsou0DyJGcT891WfIOuw6eu8q%25LAlmPkfeSvg3%25n3IaGuyOisMeIzR%25BWIJCgN2);">RS</figure>
                </div>
            <div class="right">
                <figure class="back" style="background-image: url(https://pics.porsche.com/rtt/iris?COSY-EU-100-1713c6eK12UC31P3T5JOCU%25hjdmiTDDmvMXlHWguCuq6Q44RtRHo9ZAaDjYu5P3I7tGW3rNbZJNKXv9Z7KcQQ%25yFN5tFAsXrw4r3wo0qnqZr8MCnR4i84tV2YN2OmNyW1QGWgCWKMUuyO3L7KMHfehQ5YCqgfNsou0DyJGcT891WfIOuw6eu8q%25LAlmPkfeSvg3%25n3IaGuyOisMeIzR%25BWIJCgN2);">ULTIME</figure>
                <figure class="front" id="cover">
                    <h1 style="font-size: 3em;" >Presse des Sportives</h1>
                    <p style="font-family: Montserrat; font-size: 2em; text-align: center;">  Club des passionnés..... <br>tournez les pages</p>
                </figure>
            </div>
        </div>
        <button onclick="turnLeft()">Prev</button> <button onclick="turnRight()">Next</button>
        <br/>
    </div>
    <div class="center-div" style="text-align: right;" >
        <a href="index.php" class="back">
            <div>
            </div>
              <h4>Poulain Automobiles</h4>
                <span>Retour Acceuil</span>
                    </a>
                        <span></span>      
      </div>        
      </div> 
      <footer>
                    <p>Copyright &copy; 2023 Olivier Poulain Designer Web Developpeur Droits réservés  o.poulain@outlook.com</p>
                        </footer> 
</body>
</html>