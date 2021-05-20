<?php  require_once 'header.php'; ?>

<main role="main" class="flex-shrink-0">

  <div class="container">

<?php
$lesContinent = "";
        if(isset($_POST['Continent']))
        {
                $lesContinent = $_POST['Continent'];
        }


?>
    <center>
    <h1>Les pays dans le monde </h1>
    </center>
    <div>
        <?php
            require_once 'inc/manager-db.php';
            $continent = $lesContinent;
            $desPays = getCountriesByContinent($continent);
         ?>
       <code>
         <?php ?>
      </code>
    </div>
    <div>
    <style>
    table th, td {
        border: 2px solid black;
        border-collapse: collapse;
      }
      th, td {
        padding: 5px
        text-align : left 
        

      }
    }
    </style>
    <center>
    <form action="" method="post">
    <br>
    <h3><select name="Continent"></h3>
    </br> 
        <option value="" disabled selected>Choose option</option>
        <option value="Africa">Africa</option>
        <option value="Antarctica">Antarctica</option>
        <option value="Asia">Asia</option>
        <option value="Europe">Europe</option>
        <option value="North America">North America</option> 
        <option value="Oceania">Oceania</option>
        <option value="South America">South America</option>
    </select>
    <br>
    <input type="submit" name="submit" vlaue="Choose options">
    </br>
    </center>

    
 
    </div>
    <p>
      <table>
      <tr>
        <td>Name</td>
        <td>Region</td>
        <td>SurfaceArea</td>
        <td>IndepYear</td>
        <td>Population</td>
        <td>LifeExpectancy</td>
        <td>GNP</td>
        <td>GNPOld</td>
        <td>LocalName</td>
        <td>GovernmentForm</td>
        <td>HeadOfState</td>
      </tr>
      <tr>
      <?php
        for ($i= 0; $i < count($desPays); $i++){
          echo "<tr>";
          echo "<td>" . $desPays[$i] ->Name ."</td>";
          echo "<td>" . $desPays[$i] ->Region ."</td>";
          echo "<td>" . $desPays[$i] ->SurfaceArea ."</td>";
          echo "<td>" . $desPays[$i] ->IndepYear ."</td>";
          echo "<td>" . $desPays[$i] ->Population ."</td>";
          echo "<td>" . $desPays[$i] ->LifeExpectancy ."</td>";
          echo "<td>" . $desPays[$i] ->GNP ."</td>";
          echo "<td>" . $desPays[$i] ->GNPOld ."</td>";
          echo "<td>" . $desPays[$i] ->LocalName ."</td>";
          echo "<td>" . $desPays[$i] ->GovernmentForm ."</td>";
          echo "<td>" . $desPays[$i] ->HeadOfState ."</td>";
        }
      ?>
      </tr>
      </table>
    </p>
  </div>
</main>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
