let table = new DataTable('.table', {
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/pt-BR.json',
    },
    // "searching": false,
    initComplete: function () {
        this.api().columns().every( function () {
            var column = this;
            if(column[0] > 0) { 
                var header = $(column.header()).text();
                var input = $('<input type="text" placeholder="Filtrar..." class="form-control"/>')
                    .on( 'keyup change', function () {
                        if (column.search() !== this.value) {
                            column.search( this.value ).draw();
                        }
                    } );
                $(column.header()).append(input);
            }
        } );
    }
});