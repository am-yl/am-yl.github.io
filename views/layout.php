<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="icon" href="assets/img/favicon.png" type="image/png" />

		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
			rel="stylesheet"
		/>
		<link
			href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
			rel="stylesheet"
		/>
		<script src="https://cdn.tailwindcss.com"></script>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
		<title>Amyl</title>
	</head>
    <body class="h-screen bg-indigo-950 text-yellow-50">
		<header
			class="px-[15%] py-4 flex sticky top-0 scroll:bg-yellow-50 scroll:text-indigo-950 items-center justify-between bg-indigo-950 shadow-sm shadow-yellow-50"
		>
			<div class="flex items-end justify-between">
				<a class="pr-4" href="https://am-yl.github.io/">
					<!-- <img class="h-16" src="assets/img/logo_amyl.svg" alt="" /> -->
					<h2 class="text-3xl text-yellow-50">Amyl</h2>
				</a>
			</div>
			<nav>
				<ul class="flex items-center justify-between">
					<li class="px-4 hover">
						<a
							href="?page=projects"
							class="transition-all hover:underline hover:text-yellow-200"
						>
							Projets
						</a>
					</li>
					<li class="px-4">
						<a
							href="https://github.com/am-yl"
							class="transition-all hover:underline hover:text-yellow-200"
						>
							Github
						</a>
					</li>
				</ul>
			</nav>
		</header>
        <main class="px-[15%] py-12 text-center">
            <?php include 'views/content/'.$content.'.php'; ?>
        </main>
        <footer class="px-[15%]">
            <a href="https://github.com/am-yl" id="amyl">amyl</a>
		</footer>
	</body>
</html>