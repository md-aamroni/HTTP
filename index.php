<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>HyperText Transfer Protocol</title>
	<link href="src/https.svg" rel="shortcut icon" type="image/png" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<style>
		body {font-family: 'Roboto', sans-serif;}
	</style>
</head>

<body>
	<div class="container">
		<div class="sticky-top">
			<h2 class="text-center my-2 text-muted">Hyper Text Transfer Protocol Exploration</h2>
			<hr class="border border-danger border-3">
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="row">
					<?php $contents = ['what-is-http', 'http-is-stateless', 'what-is-https', 'http-methods', 'http-header-fields', 'http-status-code', 'http/2']; ?>
					<?php foreach ($contents as $content) : ?>
						<div class="col-12">
							<div class="card mb-2">
								<div class="card-body py-2">
									<div class="form-check mb-0">
										<input class="form-check-input" type="radio" name="iteration" value="<?php echo $content; ?>">
										<label class="form-check-label" for="iteration"><?php echo ucwords(str_replace('-', ' ', $content)); ?></label>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="col-md-9">
				<div id="renderContent">
					<div class="card">
						<img src="./src/http.png" class="card-img-top mx-auto d-block" alt="Http Image" style="width:auto; height:460px">
					</div>
				</div>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script type="text/javascript">
			const httpContent = {
				'what-is-http': [
					'Hyper Text Transfer Protocol',
					'Communication Between Web Server and Clients',
					'HTTP Request and/or Response',
					'Loading Pages, Form Submit and Asynchronous JavaScript And XML'
				],
				'http-is-stateless': [
					'Every Request is Completely Independent',
					'Similar to Transactions',
					'Programming, Local Storage, Cookies, Sessions are used to Create Enhanced User Expreiences'
				],
				'what-is-https': [
					'Hyper Text Transfer Protocol Secure',
					'Encrypted Data Communication',
					'SSL (Secure Sockets Layer) and/or TLS (Transport Layer Security)',
					'Install Certificate on Web Host'
				],
				'http-methods': [
					'GET - Retrieves data from the server',
					'POST - Submit data to the server',
					'PUT - Update data which is already on the server',
					'DELETE - Deletes data form the server'
				],
				'http-header-fields': {
					'General': ['Request URL', 'Request Method', 'Status Code', 'Remote Address', 'Referrer Policy'],
					'Response': ['Server', 'Set-Cookie', 'Content-Type', 'Content-Type', 'Content-Length', 'Date'],
					'Request': ['Cookies', 'Accept-XXX', 'Content-Type', 'Content-Length', 'Authorization', 'User-Agent', 'Referrer']
				},
				'http-status-codes': {
					'Defination': {
						'1xx - Informational': 'Request received and/or processing',
						'2xx - Success': 'Successfully received, understood and accepted',
						'3xx - Redirect': 'Further action must be taken and/or redirect',
						'4xx - Client Error': 'Request does not have what is needs',
						'5xx - Server Error': 'Server failed to fulfil an apparent valid request'
					},
					'Most Usage': [
						'200 - Ok',
						'201 - Ok Created',
						'301 - Moved to new URL',
						'304 - Not modified (Cached Version)',
						'400 - Bad Request',
						'401 - Unauthorized',
						'404 - Not Found',
						'500 - Internal Server Error',
					]
				},
				'http/2': [
					'Major Revision of HTTP',
					'Under the Hood Changes',
					'Respond with More Data',
					'Reduce Latency by Enabling Full Request and Response Multiplexing',
					'Fast, Efficient and Secure'
				]
			};

			// TODO: Render Component
			$(document).ready(function() {
				$(document).on('click', '[name="iteration"]', function() {
					let script = $(this).val();
					if (script) {
						if (script === "what-is-http") {
							$('#renderContent').html(whatIsHttp());
						} else if (script === "http-is-stateless") {
							$('#renderContent').html(httpIsStateless());
						} else if (script === "what-is-https") {
							$('#renderContent').html(whatIsHttps());
						} else if (script === "http-methods") {
							$('#renderContent').html(httpMethods());
						} else if (script === "http-header-fields") {
							$('#renderContent').html(httpHeaderFields());
						} else if (script === "http-status-code") {
							$('#renderContent').html(httpStatusCodes());
						} else if (script === "http/2") {
							$('#renderContent').html(http2());
						}
					}
				});

				console.group('HTTP Exploration');
				console.log(httpContent);
				console.groupEnd();
			});


			// TODO: What is HTTP Functional Component
			function whatIsHttp() {
				let data = [
					'Hyper Text Transfer Protocol',
					'Communication Between Web Server and Clients',
					'HTTP Request and/or Response',
					'Loading Pages, Form Submit and Asynchronous JavaScript And XML'
				];

				return `
					<div class="card border-warning">
						<div class="card-body fs-4 text-center py-1">WHAT IS HTTP</div>
					</div>
					<div class="mt-3">		
						<ul class="list-group">
							<li class="list-group-item"><i class="fas fa-chevron-right text-warning me-2"></i> ${ data[0] }</li>
							<li class="list-group-item"><i class="fas fa-chevron-right text-warning me-2"></i> ${ data[1] }</li>
							<li class="list-group-item"><i class="fas fa-chevron-right text-warning me-2"></i> ${ data[2] }</li>
							<li class="list-group-item"><i class="fas fa-chevron-right text-warning me-2"></i> ${ data[3] }</li>
						<ul class="list-group">
					</div>
				`;
			}

			// TODO: HTTP is Stateless Functional Component
			function httpIsStateless() {
				let data = [
					'Every Request is Completely Independent',
					'Similar to Transactions',
					'Programming, Local Storage, Cookies, Sessions are used to Create Enhanced User Expreiences'
				];

				return `
					<div class="card border-warning">
						<div class="card-body fs-4 text-center py-1">HTTP IS STATELESS</div>
					</div>
					<div class="mt-3">
						<ul class="list-group">
							<li class="list-group-item"><i class="fas fa-chevron-right text-warning me-2"></i> ${ data[0] }</li>
							<li class="list-group-item"><i class="fas fa-chevron-right text-warning me-2"></i> ${ data[1] }</li>
							<li class="list-group-item"><i class="fas fa-chevron-right text-warning me-2"></i> ${ data[2] }</li>
						<ul class="list-group">
					</div>
				`;
			}

			// TODO: What is HTTPS Functional Component
			function whatIsHttps() {
				let data = [
					'Hyper Text Transfer Protocol Secure',
					'Encrypted Data Communication',
					'SSL (Secure Sockets Layer) and/or TLS (Transport Layer Security)',
					'Install Certificate on Web Host'
				];

				return `
					<div class="card border-warning">
						<div class="card-body fs-4 text-center py-1">WHAT IS HTTPS</div>
					</div>
					<div class="mt-3">
						<ul class="list-group">
							<li class="list-group-item"><i class="fas fa-chevron-right text-warning me-2"></i> ${ data[0] }</li>
							<li class="list-group-item"><i class="fas fa-chevron-right text-warning me-2"></i> ${ data[1] }</li>
							<li class="list-group-item"><i class="fas fa-chevron-right text-warning me-2"></i> ${ data[2] }</li>
							<li class="list-group-item"><i class="fas fa-chevron-right text-warning me-2"></i> ${ data[3] }</li>
						<ul class="list-group">
					</div>
				`;
			}


			// TODO:HTTP Methods Functional Component
			function httpMethods() {
				let data = [
					'GET - Retrieves data from the server',
					'POST - Submit data to the server',
					'PUT - Update data which is already on the server',
					'DELETE - Deletes data form the server'
				];

				return `
					<div class="card border-warning">
						<div class="card-body fs-4 text-center py-1">HTTP METHODS</div>
					</div>
					<div class="mt-3">
						<ul class="list-group">
							<li class="list-group-item"><i class="fas fa-chevron-right text-warning me-2"></i> ${ data[0] }</li>
							<li class="list-group-item"><i class="fas fa-chevron-right text-warning me-2"></i> ${ data[1] }</li>
							<li class="list-group-item"><i class="fas fa-chevron-right text-warning me-2"></i> ${ data[2] }</li>
							<li class="list-group-item"><i class="fas fa-chevron-right text-warning me-2"></i> ${ data[3] }</li>
						<ul class="list-group">
					</div>
				`;
			}


			// TODO:HTTP Methods Functional Component
			function httpHeaderFields() {
				let data = {
					'General': ['Request URL', 'Request Method', 'Status Code', 'Remote Address', 'Referrer Policy'],
					'Response': ['Server', 'Set-Cookie', 'Content-Type', 'Content-Type', 'Content-Length', 'Date'],
					'Request': ['Cookies', 'Accept-XXX', 'Content-Type', 'Content-Length', 'Authorization', 'User-Agent', 'Referrer']
				};

				return `
					<div class="card border-warning">
						<div class="card-body fs-4 text-center py-1">HTTP HEADER FILEDS</div>
					</div>
					<div class="mt-3">
						<ul class="list-group">
							<li class="list-group-item d-flex justify-content-between align-items-start">
								<div class="ms-2 me-auto">
									<div class="fw-bold">General</div>
									<i class="fas fa-chevron-right text-warning me-2"></i> ${ data['General'].toString().split(', ')[0].replaceAll(',', ', ') }
								</div>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-start">
								<div class="ms-2 me-auto">
									<div class="fw-bold">Response</div>
									<i class="fas fa-chevron-right text-warning me-2"></i> ${ data['Response'].toString().split(', ')[0].replaceAll(',', ', ') }
								</div>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-start">
								<div class="ms-2 me-auto">
									<div class="fw-bold">Request</div>
									<i class="fas fa-chevron-right text-warning me-2"></i> ${ data['Request'].toString().split(', ')[0].replaceAll(',', ', ') }
								</div>
							</li>
						<ul class="list-group">
					</div>
				`;
			}


			// TODO:HTTP Status Codes Functional Component
			function httpStatusCodes() {
				let data = {
					'Defination': [
						['1xx - Informational', 'Request received and/or processing'],
						['2xx - Success', 'Successfully received, understood and accepted'],
						['3xx - Redirect', 'Further action must be taken and/or redirect'],
						['4xx - Client Error', 'Request does not have what is needs'],
						['5xx - Server Error', 'Server failed to fulfil an apparent valid request']
					],
					'Most Usage': [
						'200 - Ok',
						'201 - Ok Created',
						'301 - Moved to new URL',
						'304 - Not modified (Cached Version)',
						'400 - Bad Request',
						'401 - Unauthorized',
						'404 - Not Found',
						'500 - Internal Server Error',
					]
				};

				return `
					<div class="card border-warning">
						<div class="card-body fs-4 text-center py-1">HTTP STATUS CODES</div>
					</div>
					<div class="mt-3">
						<ul class="list-group">
							<li class="list-group-item d-flex justify-content-between align-items-start">
								<div class="ms-2 me-auto">
									<div class="fw-bold">${ data['Defination'][0][0] }</div>
									<i class="fas fa-chevron-right text-warning me-2"></i> ${ data['Defination'][0][1] }
								</div>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-start">
								<div class="ms-2 me-auto">
									<div class="fw-bold">${ data['Defination'][1][0] }</div>
									<i class="fas fa-chevron-right text-warning me-2"></i> ${ data['Defination'][1][1] }
								</div>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-start">
								<div class="ms-2 me-auto">
									<div class="fw-bold">${ data['Defination'][2][0] }</div>
									<i class="fas fa-chevron-right text-warning me-2"></i> ${ data['Defination'][2][1] }
								</div>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-start">
								<div class="ms-2 me-auto">
									<div class="fw-bold">${ data['Defination'][3][0] }</div>
									<i class="fas fa-chevron-right text-warning me-2"></i> ${ data['Defination'][3][1] }
								</div>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-start">
								<div class="ms-2 me-auto">
									<div class="fw-bold">${ data['Defination'][4][0] }</div>
									<i class="fas fa-chevron-right text-warning me-2"></i> ${ data['Defination'][4][1] }
								</div>
							</li>
						<ul class="list-group">			
					</div>
					<div class="mt-3">
						<ul class="list-group">
							<li class="list-group-item"><i class="fas fa-chevron-right text-warning me-2"></i> ${ data['Most Usage'][0] }</li>
							<li class="list-group-item"><i class="fas fa-chevron-right text-warning me-2"></i> ${ data['Most Usage'][1] }</li>
							<li class="list-group-item"><i class="fas fa-chevron-right text-warning me-2"></i> ${ data['Most Usage'][2] }</li>
							<li class="list-group-item"><i class="fas fa-chevron-right text-warning me-2"></i> ${ data['Most Usage'][3] }</li>
							<li class="list-group-item"><i class="fas fa-chevron-right text-warning me-2"></i> ${ data['Most Usage'][4] }</li>
							<li class="list-group-item"><i class="fas fa-chevron-right text-warning me-2"></i> ${ data['Most Usage'][5] }</li>
							<li class="list-group-item"><i class="fas fa-chevron-right text-warning me-2"></i> ${ data['Most Usage'][6] }</li>
							<li class="list-group-item"><i class="fas fa-chevron-right text-warning me-2"></i> ${ data['Most Usage'][7] }</li>
						<ul class="list-group">	
					</div>
				`;
			}


			// TODO: HTTP/2 Functional Component
			function http2() {
				let data = [
					'Major Revision of HTTP',
					'Under the Hood Changes',
					'Respond with More Data',
					'Reduce Latency by Enabling Full Request and Response Multiplexing',
					'Fast, Efficient and Secure'
				];

				return `
					<div class="card border-warning">
						<div class="card-body fs-4 text-center py-1">HTTP/2</div>
					</div>
					<div class="mt-3">
						<ul class="list-group">
							<li class="list-group-item"><i class="fas fa-chevron-right text-warning me-2"></i> ${ data[0] }</li>
							<li class="list-group-item"><i class="fas fa-chevron-right text-warning me-2"></i> ${ data[1] }</li>
							<li class="list-group-item"><i class="fas fa-chevron-right text-warning me-2"></i> ${ data[2] }</li>
							<li class="list-group-item"><i class="fas fa-chevron-right text-warning me-2"></i> ${ data[3] }</li>
							<li class="list-group-item"><i class="fas fa-chevron-right text-warning me-2"></i> ${ data[4] }</li>
							<li class="list-group-item"><i class="fas fa-chevron-right text-warning me-2"></i> ${ data[4] }</li>
						<ul class="list-group">
					</div>
				`;
			}
		</script>
	</div>
</body>

</html>