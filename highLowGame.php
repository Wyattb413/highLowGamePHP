<?php

echo"===========================================================================" . PHP_EOL;
echo"------------------Hello! Welcome to Wyatt's High/Low Game------------------" . PHP_EOL;
echo"===========================================================================" . PHP_EOL;

echo"                  I've Got a Random Number Between 1 & 100" . PHP_EOL;
echo"                            Can you guess it?" . PHP_EOL;
echo"                 If this game is too hard for you...exit(0)" . PHP_EOL;

//==================================================={Min and Max Values for Randomly Generated Number}=============================================\
	
	$min = 1;
	$max = 100;

//==============================================================={Random Number Generator===========================================================\	

	$randomNumber = mt_rand($min, $max);

//==============================================================={Number Of Guess}==================================================================\

	$numberOfGuesses = 0;

//===================================================={Prompts User For Their Guess & Returns TooHigh/TooLow}=======================================\

	do {
		fwrite(STDOUT, "Your Guess: ");
		$userGuess = trim(fgets(STDIN));
		if ($userGuess == "exit(0)") {
			exit();
		};
		if ($userGuess > $randomNumber) {
			$numberOfGuesses += 1;
			$outPut = shell_exec("cowsay -f stegosaurus Your number is too high, snoop dog");
			echo "$outPut";

		};
		if ($userGuess < $randomNumber) {
			$numberOfGuesses += 1;
			$outPut = shell_exec("cowsay -f stegosaurus There aint no valley loooooow enough...low your number is too low");
			echo "$outPut";
			
		};
	} while ($userGuess != $randomNumber);

	if ($userGuess == $randomNumber) {
		echo"
		                                     `,'+',                                
		                           ,'++',`+++++++++++;                             
		                       `+++++++++++++++++++++++;                           
		                      +++++++++++++++++++++++++++:,.                       
		                    '+++++++++++++++........++++++++++++                   
		                   ++++++;`..................`++++++++++++                 
		                  +++++,.....,:.................+++++++++++                
		                 '++++`......;;,......................'+++++               
		              ,++++++........;;.........................+++++              
		             +++++++.....................................+++++             
		           :+++++++.......................................++++             
		          ;+++++..........................................`++++;           
		         ,++++:............................................'+++++          
		         ++++...............................................++++++`        
		        ++++.................................................`+++++        
		       `+++'...............................;;;,................'++++       
		       ++++............`,..................;;;;........,........:++++      
		       +++:............;;;,................;;;;.......;;;........++++`     
		      ++++............:;;;;................;;;,.......;;;.........++++     
		     `+++'............,;;;;............................:,.........,+++     
		     ++++`.............:;;.........................................++++    
		    ++++,..........................................................++++    
		   ++++:............................................................+++    
		  .++++.............................................................++++   
		  ++++..............................................................++++,  
		  +++,..............................................................`++++  
		 ;+++...........'#,........................;;;;.......................++++ 
		 ++++.........###   ,..........:...........;;;;`........;###,.........++++ 
		 +++;........###     ,........;;,..........;;;;.......`###.  ;........`+++.
		 +++,.......;###     `........,;............;;,.......###`    '........++++
		 +++:.......####     ``..............................,###      `.......'+++
		 +++;.......####     #...............................####      ;.......:+++
		 +++'.......#####   '#`..............................####     :'.......:+++
		 ++++.......'#  +#####...............................'##:#`  ,#,.......;+++
		 ++++........#  .####,...............................`#   #####........++++
		 '+++........`#.####:.................................'  ,####,........++++
		 ++++...........##;....................................;#####,.........+++,
		 +++:.....................................................,............+++ 
		 +++`..................................................................+++;
		,+++............................##.......`#,...........................++++
		;+++...........................`##`......'##...........................:+++
		++++...,;;:.....................##.......###...........................,+++
		++++...;;;;.....................##;......##+...........................,+++
		;+++...;;;;`....................###.....`##............................:+++
		`+++...:;;;......................##;....###............,;..............++++
		 +++,...``.......................####.,###,.............`..............++++
		 ++++.............................#######'.............................+++`
		 `+++:.............................;####..............................++++ 
		  ++++...............................................................`++++ 
		   +++'........................;;....................................++++  
		   ++++.......................;;;;...................................+++'  
		   ++++............;,.........;;;;.....................,;;;.........'+++   
		   :+++...........,;;.........;;;;.....................;;;;.........++++   
		    +++`..........`;;..................................;;;;.........+++:   
		    +++:................................................;;;.........+++    
		    ++++...........................................................++++    
		    `+++,.........................................................`+++'    
		     ++++`........................................................++++     
		      ++++`......................................................++++'     
		      '++++:...................................................`+++++      
		       ++++++`.........;;;....................................:+++++       
		        '++++'........:;;;;........;;........................++++++        
		          ++++........,;;;;........,;.......................,++++'         
		           ++++........;;;........................,;;.......++++           
		           ++++:..................................;;;;.....,+++,           
		            ++++,................................,;;;;....`++++            
		             +++++................................;;;:...`++++`            
		             .++++++...............................,....'++++'             
		              `+++++++++............................`,+++++++              
		                +++++++++,.......................++++++++++:               
		                  +++++++++.....................++++++++++                 
		                      ,++++++,```.'++,.....`.'+++++++++;                   
		                       `+++++++++++++++++++++++++++`                       
		                         ++++++++++++++++++++++++.                         
		                           ;+++++++++++++++++++                            

		";
		echo"                 Guess who gets a cookie..." . PHP_EOL;
		echo"                                      You took {$numberOfGuesses} guesses" . PHP_EOL;
};
