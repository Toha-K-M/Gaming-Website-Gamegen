<?php
	include ('head.php');
?>
	
            <!_____after menu__>
			<div id="bla"><br/><br/><br/></div>
			<div id="ta">
            <table id="ppc" cellspacing="2" width="100%" background="g.jpg">
            	<tr>
            		<td rowspan="2" width="20%">
            		</td>
            		<td rowspan="2" width="40%" background="un1.jpg">
               		<div id="r"><a href="rev.php">
            			<hgroup>
            			<h1  style="color: white">Uncharted 4 Game of The Year</h1>
            			<br>
      	   			    <h2  style="color: white">Uncharted 4: A Thief's End is an action-adventure video game
      	   			    developed by Naughty Dog and published by Sony Interactive
      	   			    </h2>
      	   				</hgroup>
            		</a></div>
            		</td>
            		<td width="20%" background="un1.jpg">
            		<br/>
      				<div id="r"><a href="rev.php">
            			<hgroup>
            			<h2  style="color: white">Uncharted 4 Game of The Year</h2>
            			<p  style="color: white">this games review in progress</p>
            			<br/>
      	   				</hgroup>
            		</a></div>
            		</td>
            		<td width="20%">
            		</td>
            	</tr>
            	<tr>
            		<td width="20%" background="un1.jpg">
            		<br/>
            		<div id="r"><a href="rev.php">
            			<hgroup>
            			<h2  style="color: white">Uncharted 4 Game of The Year</h2>
            			<p  style="color: white">this games review in progress</p>
            			<br/>
      	   				</hgroup>
            		</a></div>
            		</td>
            	</tr>
            </table>
            </div>
              <table cellspacing="5" width="100%">
              <tr>
			  <td width="30%">
					<img  src="un1.jpg" width="100%"/>
				</td>
              <td width="50%">
                        <h1 id="h">Game of The Year 2016</h1>
                        <p id="un">Uncharted 4: A Thief's End is an action-adventure video game developed by Naughty Dog and published by Sony Interactive Entertainment for the PlayStation 4 video game console.</p>
			</td>
          <?php
            $result = $db->query("SELECT title, year FROM game_main
                                  WHERE year>= 2016");

            
          ?>  
          
            <td rowspan="2" width="20%">
                <div id="up_list">    <!__ete query hobe__>
                <h2>TOP RATED GAMES</h2>
                <br/>

                <dl id="up_games">
                <?php
                  $row = $result->fetch_assoc();
                  while($row!=NULL){
                    echo"
                      <li>$row[title]<br>
                          Coming $row[year] 
                      </li><br>
                    ";
                    $row = $result->fetch_assoc();
                  }
                ?>
                </dl>
            </div>
                </td>
                </tr>
				<tr>
				<td width="30%">
					<img  src="un1.jpg" width="100%"/>
				</td>
				<td width="50%">
                        <h1 id="h">Game of The Year 2016</h1>
                        <p id="un">Uncharted 4: A Thief's End is an action-adventure video game developed by Naughty Dog and published by Sony Interactive Entertainment for the PlayStation 4 video game console.</p>
            </td>
				</tr>
				<!________________>
				<tr>
				<td width="30%">
					<img  src="un1.jpg" width="100%"/>
				</td>
				<td width="50%">
                        <h1 id="h">Game of The Year 2016</h1>
                        <p id="un">Uncharted 4: A Thief's End is an action-adventure video game developed by Naughty Dog and published by Sony Interactive Entertainment for the PlayStation 4 video game console.</p>
            </td>
			<td>
				 <div id="reviews_list">  <!__ete query hobe__>
            <h2>&nbsp;&nbsp;EXPLORE GAMES BY </h2>
                <table width="95%" cellspacing="10">
                   <tr>
						<td>
						<h2>Coming Soon</h2>
						<br/>
							<ul>
								<li>No Man's Sky</li>
								<li>Adventure</li>
								<li>Driving</li>
								<li>Shooter</li>
								<li>MMO</li>
							</ul>
						</td>
				
						<td>
						<h2>Latest Releases</h2>
						<br/>
							<ul>
								<li>Crime</li>
								<li>Sci-fi</li>
								<li>Space</li>
								<li>Horror</li>
								<li>Military</li>
							</ul>
						</td>
                   </tr>
                </table>
 
            </div>   
			</td>
				</tr>
				<!________________>
				<tr>
				<td width="30%">
					<img  src="un1.jpg" width="100%"/>
				</td>
				<td width="50%">
                        <h1 id="h">Game of The Year 2016</h1>
                        <p id="un">Uncharted 4: A Thief's End is an action-adventure video game developed by Naughty Dog and published by Sony Interactive Entertainment for the PlayStation 4 video game console.</p>
            </td>
			<td>
				 <div id="reviews_list">  <!__ete query hobe__>
            <h2>&nbsp;&nbsp;EXPLORE GAMES BY </h2>
                <table width="95%" cellspacing="10">
                   <tr>
						<td>
						<h2>Genre</h2>
						<br/>
							<ul id="genre">
								<li>Action</li>
								<li>Adventure</li>
								<li>Driving</li>
								<li>Shooter</li>
								<li>MMO</li>
								<li>Sports</li>
								<li>FPS</li>
							</ul>
						</td>
                   </tr>
				   <tr>
						<td>
						<h2>Theme</h2>
						<br/>
							<ul id="genre">
								<li>Crime</li>
								<li>Sci-fi</li>
								<li>Space</li>
								<li>Horror</li>
								<li>Military</li>
							</ul>
						</td>
                   </tr>
                </table>
 
            </div>   
			</td>
				</tr>
              </table>
            <!_____________________>
<?php
	include ('foot.php');
?>

