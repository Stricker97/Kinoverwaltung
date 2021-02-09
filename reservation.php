<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <script src="reservation.js"></script>
    <link rel="stylesheet" href="reservation.css">
</head>
<body>
    <header>
        <h1>Reservation</h1>
    </header>
    <main>
            <div class="one">
                <button id="film1">
                    Hier klicken um Sitzplatz auszuwählen
                </button>
                <div id="saal1" class="saal">
                    <div class="info">
                        <p>Film Titel:</p>
                        <p>Dauer:</p>
                        <p>Startzeit:</p>
                        <p>Endzeit:</p>
                        <p>Saal:</p>
                    </div>
                    <div class="row">
                        <div class="platz">1</div>
                        <div class="platz">2</div>
                        <div class="platz">3</div>
                        <div class="platz">4</div>
                        <div class="platz">5</div>
                        <div class="platz">6</div>
                        <div class="platz">7</div>
                        <div class="platz">8</div>
                        <div class="platz">9</div>
                        <div class="platz">10</div>
                    </div>
                    <div class="row">
                        <div class="platz">11</div>
                        <div class="platz">12</div>
                        <div class="platz">13</div>
                        <div class="platz">14</div>
                        <div class="platz">15</div>
                        <div class="platz">16</div>
                        <div class="platz">17</div>
                        <div class="platz">18</div>
                        <div class="platz">19</div>
                        <div class="platz">20</div>
                    </div>
                    <div class="row">
                        <div class="platz">21</div>
                        <div class="platz">22</div>
                        <div class="platz">23</div>
                        <div class="platz">24</div>
                        <div class="platz">25</div>
                        <div class="platz">26</div>
                        <div class="platz">27</div>
                        <div class="platz">28</div>
                        <div class="platz">29</div>
                        <div class="platz">30</div>
                    </div>
                    <div class="row">
                        <div class="platz">31</div>
                        <div class="platz">32</div>
                        <div class="platz">33</div>
                        <div class="platz">34</div>
                        <div class="platz">35</div>
                        <div class="platz">36</div>
                        <div class="platz">37</div>
                        <div class="platz">38</div>
                        <div class="platz">39</div>
                        <div class="platz">40</div>
                    </div>
                    <div class="row">
                        <div class="platz">41</div>
                        <div class="platz">42</div>
                        <div class="platz">43</div>
                        <div class="platz">44</div>
                        <div class="platz">45</div>
                        <div class="platz">46</div>
                        <div class="platz">47</div>
                        <div class="platz">48</div>
                        <div class="platz">49</div>
                        <div class="platz">50</div>
                    </div>
                    <div class="row">
                        <div class="platz">51</div>
                        <div class="platz">52</div>
                        <div class="platz">53</div>
                        <div class="platz">54</div>
                        <div class="platz">55</div>
                        <div class="platz">56</div>
                        <div class="platz">57</div>
                        <div class="platz">58</div>
                        <div class="platz">59</div>
                        <div class="platz">60</div>
                    </div>
                    <div class="row">
                        <div class="platz">61</div>
                        <div class="platz">62</div>
                        <div class="platz">63</div>
                        <div class="platz">64</div>
                        <div class="platz">65</div>
                        <div class="platz">66</div>
                        <div class="platz">67</div>
                        <div class="platz">68</div>
                        <div class="platz">69</div>
                        <div class="platz">70</div>
                    </div>
                    <div class="row">
                        <div class="platz">71</div>
                        <div class="platz">72</div>
                        <div class="platz">73</div>
                        <div class="platz">74</div>
                        <div class="platz">75</div>
                        <div class="platz">76</div>
                        <div class="platz">77</div>
                        <div class="platz">78</div>
                        <div class="platz">79</div>
                        <div class="platz">80</div>
                    </div>
                    <div class="row">
                        <div class="platz">81</div>
                        <div class="platz">82</div>
                        <div class="platz">83</div>
                        <div class="platz">84</div>
                        <div class="platz">85</div>
                        <div class="platz">86</div>
                        <div class="platz">87</div>
                        <div class="platz">88</div>
                        <div class="platz">89</div>
                        <div class="platz">90</div>
                    </div>
                    <div class="row">
                        <div class="platz">91</div>
                        <div class="platz">92</div>
                        <div class="platz">93</div>
                        <div class="platz">94</div>
                        <div class="platz">95</div>
                        <div class="platz">96</div>
                        <div class="platz">97</div>
                        <div class="platz">98</div>
                        <div class="platz">99</div>
                        <div class="platz">100</div>
                    </div>
                </div>
            </div>
    </main>

    <script>
    var timesClicked = 0;
    document.getElementById("film1").onclick = function(){
        timesClicked++;
        if(timesClicked%2!=0){
        document.getElementById("saal1").style.backgroundColor = "transparent";
        document.getElementById("saal1").style.color = "transparent";
        var x = document.getElementsByClassName("platz");
        var i;
        for (i = 0; i < x.length; i++) {
            x[i].style.color = "white";
        }
        }else{
            document.getElementById("saal1").style.backgroundColor = "black";
            document.getElementById("saal1").style.color = "white";
            var x = document.getElementsByClassName("platz");
            var i;
            for (i = 0; i < x.length; i++) {
                x[i].style.color = "black";
            }
        }
    }
    </script>
</body>
</html>