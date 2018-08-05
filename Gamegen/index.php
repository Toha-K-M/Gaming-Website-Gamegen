<?php
	include ('head.php');
?>
            <!_____after menu__>
			<div id="bla"><br/><br/><br/></div>
            <div class="container">
                 <video controls loop muted width=33% height=10% autoplay>
                     <source src="uu.mp4" type="video/mp4">
                     <source src="uu.ogg" type="video/ogg">
                  </video> 
                  <video controls loop muted width=33% height=10% autoplay>
                     <source src="in.mp4" type="video/mp4">
                     <source src="in.ogg" type="video/ogg">
                  </video> 
                  <video controls loop muted width=33% height=10% autoplay>
                     <source src="f.mp4" type="video/mp4">
                     <source src="f.ogg" type="video/ogg">
                  </video> 
              </div>
              <table cellspacing="5" width="100%">
              <tr>
              <td width="40%">
                <img  src="un1.jpg" width="100%"/>
                        <h1 id="h">Game of The Year 2016</h1>
                        <p id="un">Uncharted 4: A Thief's End is an action-adventure video game developed by Naughty Dog and published by Sony Interactive Entertainment for the PlayStation 4 video game console.</p>
            </td>
            <td width="40%">
                <img  src="g.jpg" width="100%"/>
                        <h1 id="h">GOD of WAR COMING !</h1>   
                        <p id="un">Uncharted 4: A Thief's End is an action-adventure video game developed by Naughty Dog and published by Sony Interactive Entertainment for the PlayStation 4 video game console.</p>
            </td>

          <?php
            $result = $db->query("SELECT title, year FROM game_main
                                 where year>= 2016");

            
          ?>  
          
            <td rowspan="2" width="20%">
                <div id="up_list">    <!__ete query hobe__>
                <h2>TOP UPCOMING GAMES</h2>
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
				<td width="20%">
                <img  src="un1.jpg" width="100%"/>
                        <h1 id="h">Game of The Year 2016</h1>
                        <p id="un">Uncharted 4: A Thief's End is an action-adventure video game developed by Naughty Dog and published by Sony Interactive Entertainment for the PlayStation 4 video game console.</p>
            </td>
			<td width="40%">
                <img  src="un1.jpg" width="100%"/>
                        <h1 id="h">Game of The Year 2016</h1>
                        <p id="un">Uncharted 4: A Thief's End is an action-adventure video game developed by Naughty Dog and published by Sony Interactive Entertainment for the PlayStation 4 video game console.</p>
            </td>
				</tr>
				<tr>
				<td width="20%">
                <img  src="un1.jpg" width="100%"/>
                        <h1 id="h">Game of The Year 2016</h1>
                        <p id="un">Uncharted 4: A Thief's End is an action-adventure video game developed by Naughty Dog and published by Sony Interactive Entertainment for the PlayStation 4 video game console.</p>
            </td>
			<td width="40%">
                <img  src="un1.jpg" width="100%"/>
                        <h1 id="h">Game of The Year 2016</h1>
                        <p id="un">Uncharted 4: A Thief's End is an action-adventure video game developed by Naughty Dog and published by Sony Interactive Entertainment for the PlayStation 4 video game console.</p>
            </td>
			<td>
				 <div id="reviews_list">  <!__ete query hobe__>
            <h2>LATEST REVIEWS</h2>
                <table width="95%" cellspacing="10">
                   <tr>
                       <td><h3>Game<h3></td>
                       <td><h3>&nbsp;&nbsp;&nbsp;&nbsp;Score<h3></td>
                   </tr>
				   <tr>       <!__review er query shuru__>

                       <td>No Man's Sky</td>
                       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7</td>
                   </tr>
                    <tr>
                       <td>Kentucky Route <br>
						               Act IV </td>
                       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9</td>
                   </tr>
                    <tr>
                       <td>This is the Police</td>
                       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7</td>
                   </tr>
                    <tr>
                       <td>Batman - The <br>
                           Telltale Series
                       </td>
                       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8</td>
                   </tr>
                   <tr>
                       <td>Abzu</td>
                       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9</td>
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
			