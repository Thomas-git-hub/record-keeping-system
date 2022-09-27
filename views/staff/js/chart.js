var x = 40;
	var y = 15;
	var z = 35;

	var a;

	if (x > y && x > z){
		a = x+10;
	}

  const labels = [
    'Baptismal',
    'Marriage',
    'Confirmation',
  ];

  const data = {
    labels: labels,
    datasets: [{
      label: 'No. of Persons',
      backgroundColor: 'rgb(197, 172, 132)',
      borderColor: 'rgb(109, 91, 75)',
      data: [x, y, z, a],
    }]
  };

  const config = {
    type: 'bar',
    data: data,
    options: {}
  };