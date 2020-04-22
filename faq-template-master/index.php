<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	<title>FAQ Template | CodyHouse</title>
</head>
<body>
    <?php
    
    $username="root";
    $password="";


    $conn = new mysqli("localhost",$username,$password);

    if($conn->connect_error){
        echo $conn->connect_error;
    }
        

    $sql = "Use agro";
    if($conn->query($sql)===true){
        echo "Using agro database<br>";
    }
    else
        echo $conn->error;
    ?>

<header>
	<h1>Frequently asked questions</h1>
</header>
<section class="cd-faq">
	

	<div class="cd-faq-items">
		<ul id="basics" class="cd-faq-group">
			
			<li>
				<a class="cd-faq-trigger" href="#0">Plants have wilted leaves during daytime and they eventually turn yellow</a>
				<div class="cd-faq-content">
					<p>What you should do is discard infected plants and replant new plants in pathogen-free potting soil.</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">Insects are bugging my plants, what do I do?</a>
				<div class="cd-faq-content">
					<p>Try any one of the following natural remedies.<br>1. Soapy water
Mix 5 tablespoons of dish soap with 4 cups of water in a bottle and spray plants with the solution. The soap will dehydrate aphids and spider mites.<br>

2. Neem oil spray
Made from the seeds of neem trees native to India, this age-old, natural insecticide and anti-fungicide repels aphids, mites, scale and other small, soft-bodied insects.</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">What are good pest sprays for tomatoes?</a>
				<div class="cd-faq-content">
					<p>Homemade Options<br>
Homemade pest sprays can be affordable alternatives to commercial pesticides. For example, to control aphid problems on tomatoes, a bug spray made of boiled rhubarb leaves mixed with dish detergent is one option. Another homemade insect spray for tomatoes and other vegetable plants is a blend of cayenne pepper, onion and garlic.

To prevent fungal infections like early blight in tomatoes, apply a spray made with baking soda weekly.

Organic vinegar weed spray is made with vinegar, salt and water.<br>

Spraying Tips<br>
Some pest sprays, like Bt, can also kill beneficial insects such as butterfly larvae; avoid applying when windy to minimize unwanted spread. If weed killer is used on grass, do not add clippings to your compost because this can damage tomato plants. Whether using organic, synthetic or homemade sprays, always apply and use exactly as instructed. Also, read product labels carefully to ensure the spray is a good fit for the pest you are trying to prevent or control. If unsure which pest spray to use on your tomato plants, contact your local extension office for guidance.

</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">How does a farmer get certified?</a>
				<div class="cd-faq-content">
					<p>The operator obtains and reads the National Organic Standards, and conducts a self-assessment to see if the operation meets these requirements in terms of land history, production practices, materials used and recordkeeping procedures. In many cases, some practices and systems need to be modified to comply. Once an operation complies, the operator then selects an accredited certifier, submits an application, gets inspected, meets any conditions identified by the certifier, and obtains a certificate.</p>
				</div> <!-- cd-faq-content -->
            </li>
            <?php
            
            $sq = "SELECT question,answer from queries where 1";
            $result = $conn->query($sq);
            
            if ($result->num_rows > 0) {
                                  
                while($row = $result->fetch_assoc()) {

                    if($row['answer']==""){
                        echo "<li>"."<a class=\"cd-faq-trigger\" href=\"#0\">".$row['question']."</a>".
                            "<div class=\"cd-faq-content\"><p>
                            <form method=\"POST\" action=\"shootanswer.php\">
                            <input name=\"question\" value=".$row['question'].">
                            <textarea class=\"form-control\" placeholder=\"Answer\" rows=\"7\" cols=\"95\" name=\"answer\"></textarea><br>
                            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                            </form>
                
                            </p>
                            </div>
                            </li>";
                        
                    }
                    else {
                        echo "<li>"."<a class=\"cd-faq-trigger\" href=\"#0\">".$row['question']."</a>".
                    "<div class=\"cd-faq-content\"><p>".$row['answer']."</p>
                    </div>
                    </li>";
                    }
                    
                }
                
            }

            ?>
		</ul> <!-- cd-faq-group -->


	</div> <!-- cd-faq-items -->
	<a href="#0" class="cd-close-panel">Close</a>
</section> <!-- cd-faq -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>