// author: beni/rico

// sort-table function in Game-Index:
function sortTable() {
    let table, rows, switching, i, x, y, shouldSwitch;
    table = document.getElementById("glossar");
    switching = true;
    //Make a loop:
    while (switching) {
      //start
      switching = false;
      rows = table.rows;
      //Loop through all table rows (except table headers):
      for (i = 1; i < (rows.length - 1); i++) {
        //start by saying there should be no switching:
        shouldSwitch = false;
        //Get the two elements you want to compare:
        x = rows[i].getElementsByTagName("TD")[0];
        y = rows[i + 1].getElementsByTagName("TD")[0];
        //check if the two rows should switch place:
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
      if (shouldSwitch) {
        //If a switch has been marked, make the switch:
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
      }
    }
  };
