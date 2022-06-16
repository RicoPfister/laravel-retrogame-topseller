/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/sortresult.js":
/*!************************************!*\
  !*** ./resources/js/sortresult.js ***!
  \************************************/
/***/ (() => {

eval("// sort-table function in Game-Index:\nfunction sortTable() {\n  var table, rows, switching, i, x, y, shouldSwitch;\n  table = document.getElementById(\"glossar\");\n  switching = true; //Make a loop:\n\n  while (switching) {\n    //start\n    switching = false;\n    rows = table.rows; //Loop through all table rows (except table headers):\n\n    for (i = 1; i < rows.length - 1; i++) {\n      //start by saying there should be no switching:\n      shouldSwitch = false; //Get the two elements you want to compare:\n\n      x = rows[i].getElementsByTagName(\"TD\")[0];\n      y = rows[i + 1].getElementsByTagName(\"TD\")[0]; //check if the two rows should switch place:\n\n      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {\n        //if so, mark as a switch and break the loop:\n        shouldSwitch = true;\n        break;\n      }\n    }\n\n    if (shouldSwitch) {\n      //If a switch has been marked, make the switch:\n      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);\n      switching = true;\n    }\n  }\n}\n\n;//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvc29ydHJlc3VsdC5qcy5qcyIsIm5hbWVzIjpbInNvcnRUYWJsZSIsInRhYmxlIiwicm93cyIsInN3aXRjaGluZyIsImkiLCJ4IiwieSIsInNob3VsZFN3aXRjaCIsImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiLCJsZW5ndGgiLCJnZXRFbGVtZW50c0J5VGFnTmFtZSIsImlubmVySFRNTCIsInRvTG93ZXJDYXNlIiwicGFyZW50Tm9kZSIsImluc2VydEJlZm9yZSJdLCJzb3VyY2VSb290IjoiIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL3NvcnRyZXN1bHQuanM/MzFiNyJdLCJzb3VyY2VzQ29udGVudCI6WyIvLyBzb3J0LXRhYmxlIGZ1bmN0aW9uIGluIEdhbWUtSW5kZXg6XG5mdW5jdGlvbiBzb3J0VGFibGUoKSB7XG4gICAgbGV0IHRhYmxlLCByb3dzLCBzd2l0Y2hpbmcsIGksIHgsIHksIHNob3VsZFN3aXRjaDtcbiAgICB0YWJsZSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwiZ2xvc3NhclwiKTtcbiAgICBzd2l0Y2hpbmcgPSB0cnVlO1xuICAgIC8vTWFrZSBhIGxvb3A6XG4gICAgd2hpbGUgKHN3aXRjaGluZykge1xuICAgICAgLy9zdGFydFxuICAgICAgc3dpdGNoaW5nID0gZmFsc2U7XG4gICAgICByb3dzID0gdGFibGUucm93cztcbiAgICAgIC8vTG9vcCB0aHJvdWdoIGFsbCB0YWJsZSByb3dzIChleGNlcHQgdGFibGUgaGVhZGVycyk6XG4gICAgICBmb3IgKGkgPSAxOyBpIDwgKHJvd3MubGVuZ3RoIC0gMSk7IGkrKykge1xuICAgICAgICAvL3N0YXJ0IGJ5IHNheWluZyB0aGVyZSBzaG91bGQgYmUgbm8gc3dpdGNoaW5nOlxuICAgICAgICBzaG91bGRTd2l0Y2ggPSBmYWxzZTtcbiAgICAgICAgLy9HZXQgdGhlIHR3byBlbGVtZW50cyB5b3Ugd2FudCB0byBjb21wYXJlOlxuICAgICAgICB4ID0gcm93c1tpXS5nZXRFbGVtZW50c0J5VGFnTmFtZShcIlREXCIpWzBdO1xuICAgICAgICB5ID0gcm93c1tpICsgMV0uZ2V0RWxlbWVudHNCeVRhZ05hbWUoXCJURFwiKVswXTtcbiAgICAgICAgLy9jaGVjayBpZiB0aGUgdHdvIHJvd3Mgc2hvdWxkIHN3aXRjaCBwbGFjZTpcbiAgICAgICAgaWYgKHguaW5uZXJIVE1MLnRvTG93ZXJDYXNlKCkgPiB5LmlubmVySFRNTC50b0xvd2VyQ2FzZSgpKSB7XG4gICAgICAgICAgLy9pZiBzbywgbWFyayBhcyBhIHN3aXRjaCBhbmQgYnJlYWsgdGhlIGxvb3A6XG4gICAgICAgICAgc2hvdWxkU3dpdGNoID0gdHJ1ZTtcbiAgICAgICAgICBicmVhaztcbiAgICAgICAgfVxuICAgICAgfVxuICAgICAgaWYgKHNob3VsZFN3aXRjaCkge1xuICAgICAgICAvL0lmIGEgc3dpdGNoIGhhcyBiZWVuIG1hcmtlZCwgbWFrZSB0aGUgc3dpdGNoOlxuICAgICAgICByb3dzW2ldLnBhcmVudE5vZGUuaW5zZXJ0QmVmb3JlKHJvd3NbaSArIDFdLCByb3dzW2ldKTtcbiAgICAgICAgc3dpdGNoaW5nID0gdHJ1ZTtcbiAgICAgIH1cbiAgICB9XG4gIH07XG4iXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0EsU0FBU0EsU0FBVCxHQUFxQjtFQUNqQixJQUFJQyxLQUFKLEVBQVdDLElBQVgsRUFBaUJDLFNBQWpCLEVBQTRCQyxDQUE1QixFQUErQkMsQ0FBL0IsRUFBa0NDLENBQWxDLEVBQXFDQyxZQUFyQztFQUNBTixLQUFLLEdBQUdPLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixTQUF4QixDQUFSO0VBQ0FOLFNBQVMsR0FBRyxJQUFaLENBSGlCLENBSWpCOztFQUNBLE9BQU9BLFNBQVAsRUFBa0I7SUFDaEI7SUFDQUEsU0FBUyxHQUFHLEtBQVo7SUFDQUQsSUFBSSxHQUFHRCxLQUFLLENBQUNDLElBQWIsQ0FIZ0IsQ0FJaEI7O0lBQ0EsS0FBS0UsQ0FBQyxHQUFHLENBQVQsRUFBWUEsQ0FBQyxHQUFJRixJQUFJLENBQUNRLE1BQUwsR0FBYyxDQUEvQixFQUFtQ04sQ0FBQyxFQUFwQyxFQUF3QztNQUN0QztNQUNBRyxZQUFZLEdBQUcsS0FBZixDQUZzQyxDQUd0Qzs7TUFDQUYsQ0FBQyxHQUFHSCxJQUFJLENBQUNFLENBQUQsQ0FBSixDQUFRTyxvQkFBUixDQUE2QixJQUE3QixFQUFtQyxDQUFuQyxDQUFKO01BQ0FMLENBQUMsR0FBR0osSUFBSSxDQUFDRSxDQUFDLEdBQUcsQ0FBTCxDQUFKLENBQVlPLG9CQUFaLENBQWlDLElBQWpDLEVBQXVDLENBQXZDLENBQUosQ0FMc0MsQ0FNdEM7O01BQ0EsSUFBSU4sQ0FBQyxDQUFDTyxTQUFGLENBQVlDLFdBQVosS0FBNEJQLENBQUMsQ0FBQ00sU0FBRixDQUFZQyxXQUFaLEVBQWhDLEVBQTJEO1FBQ3pEO1FBQ0FOLFlBQVksR0FBRyxJQUFmO1FBQ0E7TUFDRDtJQUNGOztJQUNELElBQUlBLFlBQUosRUFBa0I7TUFDaEI7TUFDQUwsSUFBSSxDQUFDRSxDQUFELENBQUosQ0FBUVUsVUFBUixDQUFtQkMsWUFBbkIsQ0FBZ0NiLElBQUksQ0FBQ0UsQ0FBQyxHQUFHLENBQUwsQ0FBcEMsRUFBNkNGLElBQUksQ0FBQ0UsQ0FBRCxDQUFqRDtNQUNBRCxTQUFTLEdBQUcsSUFBWjtJQUNEO0VBQ0Y7QUFDRjs7QUFBQSJ9\n//# sourceURL=webpack-internal:///./resources/js/sortresult.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/sortresult.js"]();
/******/ 	
/******/ })()
;