<div>
    <h1>Tabular Data</h1>
    <table id="example" class="display" width="100%"></table>
    <script src="https://code.jquery.com/jquery-3.7.0.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script>
        const dataSet = [
            ['Tiger Nixon', 'System Architect', 'Edinburgh',  '2011/04/25', '$320,800'],
            ['Garrett Winters', 'Accountant', 'Tokyo',  '2011/07/25', '$170,750'],
            ['Ashton Cox', 'Junior Technical Author', 'San Francisco',  '2009/01/12', '$86,000'],
            ['Cedric Kelly', 'Senior Javascript Developer', 'Edinburgh',  '2012/03/29', '$433,060'],
            ['Airi Satou', 'Accountant', 'Tokyo', '5407', '2008/11/28', '$162,700'],
            ['Brielle Williamson', 'Integration Specialist', 'New York',  '2012/12/02', '$372,000'],
            ['Herrod Chandler', 'Sales Assistant', 'San Francisco', '2012/08/06', '$137,500'],
            ['Rhona Davidson', 'Integration Specialist', 'Tokyo',  '2010/10/14', '$327,900'],
            ['Colleen Hurst', 'Javascript Developer', 'San Francisco',  '2009/09/15', '$205,500'],
            ['Sonya Frost', 'Software Engineer', 'Edinburgh',  '2008/12/13', '$103,600'],
            ['Jena Gaines', 'Office Manager', 'London',  '2008/12/19', '$90,560'],
            ['Quinn Flynn', 'Support Lead', 'Edinburgh',  '2013/03/03', '$342,000'],
            ['Charde Marshall', 'Regional Director', 'San Francisco',  '2008/10/16', '$470,600'],
            ['Haley Kennedy', 'Senior Marketing Designer', 'London',  '2012/12/18', '$313,500'],
            ['Tatyana Fitzpatrick', 'Regional Director', 'London',  '2010/03/17', '$385,750'],
            ['Michael Silva', 'Marketing Designer', 'London',  '2012/11/27', '$198,500'],
            ['Paul Byrd', 'Chief Financial Officer (CFO)', 'New York',  '2010/06/09', '$725,000'],
            ['Gloria Little', 'Systems Administrator', 'New York',  '2009/04/10', '$237,500'],
            ['Bradley Greer', 'Software Engineer', 'London',  '2012/10/13', '$132,000'],
            ['Dai Rios', 'Personnel Lead', 'Edinburgh',  '2012/09/26', '$217,500'],
            ['Jenette Caldwell', 'Development Lead', 'New York',  '2011/09/03', '$345,000'],
            ['Yuri Berry', 'Chief Marketing Officer (CMO)', 'New York',  '2009/06/25', '$675,000'],
            ['Caesar Vance', 'Pre-Sales Support', 'New York',  '2011/12/12', '$106,450'],
            ['Doris Wilder', 'Sales Assistant', 'Sydney',  '2010/09/20', '$85,600'],
            ['Angelica Ramos', 'Chief Executive Officer (CEO)', 'London',  '2009/10/09', '$1,200,000'],
            ['Gavin Joyce', 'Developer', 'Edinburgh',  '2010/12/22', '$92,575'],
            ['Jennifer Chang', 'Regional Director', 'Singapore',  '2010/11/14', '$357,650'],
            ['Brenden Wagner', 'Software Engineer', 'San Francisco',  '2011/06/07', '$206,850'],
            ['Fiona Green', 'Chief Operating Officer (COO)', 'San Francisco',  '2010/03/11', '$850,000'],
            ['Shou Itou', 'Regional Marketing', 'Tokyo',  '2011/08/14', '$163,000'],
            ['Michelle House', 'Integration Specialist', 'Sydney',  '2011/06/02', '$95,400'],
            ['Suki Burks', 'Developer', 'London',  '2009/10/22', '$114,500'],
            ['Prescott Bartlett', 'Technical Author', 'London',  '2011/05/07', '$145,000'],
            ['Gavin Cortez', 'Team Leader', 'San Francisco',  '2008/10/26', '$235,500'],
            ['Martena Mccray', 'Post-Sales support', 'Edinburgh',  '2011/03/09', '$324,050'],
            ['Unity Butler', 'Marketing Designer', 'San Francisco',  '2009/12/09', '$85,675'],
        ];

        new DataTable('#example', {
            columns: [
                { title: 'Name' },
                { title: 'Position' },
                { title: 'Office' },
                { title: 'Start date' },
                { title: 'Salary' }
            ],
            data: dataSet
        });

    </script>
</div>
