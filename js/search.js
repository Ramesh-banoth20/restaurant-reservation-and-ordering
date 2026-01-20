function myFunction() {
    // Supports both legacy <table id="Table"> layouts and newer card layouts.
    var input = document.getElementById("search");
    if (!input) return;

    var filter = (input.value || "").toUpperCase();

    var table = document.getElementById("Table");
    if (!table) return;

    // Legacy: table rows
    var tr = table.getElementsByTagName("tr");
    if (tr && tr.length) {
      for (var i = 0; i < tr.length; i++) {
        var td = tr[i].getElementsByTagName("td")[0];
        if (!td) continue;

        var txtValue = td.textContent || td.innerText;
        tr[i].style.display = (txtValue.toUpperCase().indexOf(filter) > -1) ? "" : "none";
      }
      return;
    }

    // New: cards
    var cards = table.querySelectorAll(".js-search-item");
    for (var j = 0; j < cards.length; j++) {
      var name = cards[j].getAttribute("data-name") || cards[j].textContent || "";
      cards[j].style.display = (name.toUpperCase().indexOf(filter) > -1) ? "" : "none";
    }
  }