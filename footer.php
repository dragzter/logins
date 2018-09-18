<script>

    function settingsSet(el) {

        var label = document.getElementsByTagName('label');

        for (var i = 0; i < label.length; i++) {
            if (label[i].getAttribute('for') == el.getAttribute('id') ) {
               label[i].children[0].textContent = el.value;
            }
        }
    }
</script>
</body>
</html>