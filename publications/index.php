<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>Navjyoti Singh</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<!-- Bootstrap -->
<link href="css3/bootstrap.min.css" rel="stylesheet">
<!--<link href="css/bootstrap.min.css" rel="stylesheet">-->

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="js3/html5shiv.js"></script>
<script src="js3/respond.min.js"></script>
<![endif]-->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js3/bootstrap.min.js"></script>
<script type="text/javascript" src="js3/arrow78.js"></script><html>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="js/jquery.tipsy.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<link rel="stylesheet" type="text/css" href="css/custom.css"/>
<link rel="stylesheet" type="text/css" href="css3/tipsy.css"/>
<link rel="stylesheet" type="text/css" href="css3/fancybox.css"/>


<script language="JavaScript">
<!--
    function spiderjam(mym, myd){
        document.write("<a href=mailto:"	+ mym + "&#64;" + myd + ">" + mym + "&#64;" + myd + "</a>");
    }
-->
</script>

<body id="page-top" class="index">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button id="button2" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="page-scroll">
                    <a href="../index.html">Home</a>
                </li>
                <li class="page-scroll">
                    <a href="../bio.html">Research Agenda</a>
                </li>
                <li class="page-scroll">
                    <a target="_blank" href="../navjyotisingh.pdf">CV (PDF)</a>
                </li>
                <li class="page-scroll">
                    <a href="">Publications</a>
                </li>

                <li class="page-scroll">
                    <a href="../talks/">Talks</a>
                </li>
                <li class="page-scroll">
                    <a href="../sketches.html">Sketches</a>
                </li>
                <li class="page-scroll">
                    <a href="../videos.html">Videos</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->

    </div><!-- /.container-fluid -->
</nav>


<section id="tree" style="margin-top:50px">
    <div class="container">
    </div>
</section>

<!-- Home Section -->
<section id="home">
    <div class="container" id="publications">
    <br>
    <h1 align="center">Conferences, Workshops and Journal Papers</h1>
    <br>
    <?php
        error_reporting(E_ALL);
        ini_set('display_errors', '1');

        /*
         Available Fields:

         The field TYPE will be used for data-filtering. If it is not available then the item will be
         marked as uncategorised.

         'note'
         'abstract'
         'year'
         'group'
         'publisher'
         'location'
         'articleno'
         'numpages'
         'page-start'
         'page-end'
         'pages'
         'address'
         'url'
         'doi'
         'volume'
         'chapter'
         'journal'
         'author'
         'raw'
         'title'
         'booktitle'
         'folder'
         'type'
         'series'
         'linebegin'
         'lineend'
         'durl',
         'powerpoint',
         'infosite',
         'website'

         */

        /*
         Define the format that will be used for printing each bibtex item.
         If a you desire to print a string infront of a field please use the following format:

         article = array("title", "author", "string", "bibtex field");

         eg.

         article = array("title", "author", "Num. Of pages", "pages");

         Please modify the example below as desired  is presented bellow.
         */

        $article = array("title", "author", "journal", "series", "location", "publisher", "volume", "pages");
        $book = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages");
        $booklet = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages");
        $conference = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages");
        $inbook = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages");
        $incollection = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "chapter", "pages");
        $inproceedings = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "chapter", "pages");
        $manual = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages");
        $mastersthesis = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages");
        $misc = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages");
        $phdthesis = array("title", "author", "journal", "series", "location", "publisher", "volume", "pages");
        $proceedings = array("booktitle", "series", "author", "location", "publisher", "volume", "pages");
        $techreport = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages");
        $unpublished = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages");
        $other = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages");

        /*
         Delimiter for Seperating each bibtex field
         */

        $delimiter = '.';

        /*

         Enter fields equivalent to type field in the BibTex file to sort the bibtex entries in categories. Bellow each type enter the title which will be presented as the category title.

         */

        $sortby = array('journal', 'conference', 'book');
        $sortbyTitle = array('Journal and Conference Papers', 'Conference and Workshop Papers', 'Book Chapters');

        $projects = array('all');

        include 'bibtex.php';
        /*

         Enter the location of your BibTex file

         */
        $bibTexFile = 'demo.bib';

        $bibTex = new BibTeX_Parser();
        $bibTex->parser($file = $bibTexFile);
        ?>


    </div>
    </div>
</section>
<hr class="star-primary">
<footer>
    <small>
    <center>
        © 2018 | Navjyoti Singh. Credits: AR template
    <a onclick="javascript:$('#credit').toggle();"><img border="0" src="../images/ccby.png"/></a>
    <div style="display:none;" id="credit">[AR template available under Creative Commons CC BY 4.0 licence:
    <a href="https://github.com/dmsl/academic-responsive-template"_blank">
        https://github.com/dmsl/academic-responsive-template
    </a> ]
    </div>
    </center>
    </small>
</footer>
</body>
</html>
