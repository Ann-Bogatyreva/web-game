<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<style>

body {
    background: url("https://kartinkin.net/uploads/posts/2021-04/thumbs/1618049829_11-p-molniya-zamok-fentezi-12.jpg"); 
    background-size: 100% 100%;
}
    
.hcolor {
color: #FFFFFF;
font-size: 40px;
}

.btn {
    display: inline-block; 
    box-sizing: border-box;
    padding: 0 25px;
    margin: 0 15px 15px 0;
    outline: none;
    border: 1px solid #fff;
    border-radius: 50px;
    height: 46px;
    line-height: 46px;
    font-size: 25px;
    font-weight: 600;
    text-decoration: none;
    color: #9933CC;
    background-color: #66FFCC;
    box-shadow: 0 10px 6px rgb(65 132 144 / 0%), 0 1px 3px rgb(0 0 0 / 10%);
    cursor: pointer;
    user-select: none;
    appearance: none;
    touch-action: manipulation; 
    vertical-align: top;
    transition: box-shadow 0.2s;
    width: 250px;
}

.btn:focus-visible {
    border: 1px solid #4c51f9;
    outline: none;
}
.btn:hover {
    transition: all 0.2s;
    box-shadow: 0 7px 14px rgb(65 132 144 / 50%), 0 3px 6px rgb(0 0 0 / 10%);
}
    
.btn:active {
    background-color: #FFFFFF;
}
.btn:disabled {
    background-color: #eee;
    border-color: #eee;
    color: #444;
    cursor: not-allowed;
}    
</style>

<head>
    <meta charset="utf-8" />
    <title>Уровни</title>
</head>

<body>

    <h1 class="hcolor"> Выбери уровень</h1>

    <form action="http://localhost//jQuery-snapPuzzle-master/play.php" method = "GET"> 
        <input class="btn" type="submit" value = "Уровень 1"> 
        <input type="hidden" name="level" value = "cube.jpg">
    </form>
    
    <form action="http://localhost//jQuery-snapPuzzle-master/play.php" method = "GET"> 
        <input class="btn" type="submit" value = "Уровень 2"> 
        <input type="hidden" name="level" value = "apple.jpg">
    </form>
    
    <form action="http://localhost//jQuery-snapPuzzle-master/play.php" method = "GET"> 
        <input class="btn" type="submit" value = "Уровень 3"> 
        <input type="hidden" name="level" value = "kot.jpg">
    </form>
    
    <form action="http://localhost//jQuery-snapPuzzle-master/play.php" method = "GET"> 
        <input class="btn" type="submit" value = "Уровень 4"> 
        <input type="hidden" name="level" value = "ball.jpg">
    </form>
    
</body>
</html>
