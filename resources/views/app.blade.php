<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Discount Codes</title>
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Open+Sans:300,400" rel="stylesheet">
</head>
<body>
	<header class="topbar">
		<div class="left">
			<a href="{{ URL::route('submit-code') }}"><i class="material-icons">add</i>Submit a code</a>
		</div>

		<div class="right">
			@if (Auth::check())

				Welcome {{ Auth::user()->given_name }}! <a href="{{ URL::route('logout') }}">Log out.</a>

			@else

				<a href="{{ URL::route('google-login') }}">Login with Google</a>

			@endif
		</div>
	</header>

	<div class="wrapper bar-margin">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit recusandae, fuga itaque. Omnis, modi at vel magnam reiciendis cum velit excepturi accusantium expedita sunt, temporibus vero. Rem modi pariatur esse assumenda recusandae dignissimos nulla nobis cupiditate sunt, reprehenderit voluptatem, nemo quas similique quos debitis accusamus sint molestiae saepe. Blanditiis sunt reprehenderit veritatis nisi dolor doloremque quas sit vero asperiores eveniet beatae libero, atque voluptas expedita quibusdam cumque dolorem commodi quaerat quisquam magni est. Vel, magnam numquam deleniti nulla cumque accusamus, at vitae, atque esse qui odit, soluta! Nihil commodi alias molestias sunt enim asperiores reiciendis. Earum expedita deserunt atque animi culpa nisi aliquid necessitatibus repellendus labore, repudiandae hic numquam neque sunt quibusdam possimus deleniti voluptate voluptas ipsum eveniet quas provident excepturi magnam quia. Voluptatem fugit sequi earum eius autem doloremque dolore blanditiis necessitatibus saepe impedit cum iste ipsum ex quia eaque quos accusantium, ab delectus, consequuntur vel architecto repellat error laudantium quis veritatis. Iste ducimus molestiae sit, odit autem itaque tempore facere rem eos quia quae, excepturi saepe quos! Rem voluptates esse iure. Odio iure atque voluptas dolor quam inventore! Ipsum earum, iusto! Officia ea aut in consequatur enim officiis deserunt optio quae iure veritatis possimus dolore veniam ab ipsum placeat pariatur consectetur distinctio ullam nisi sint, fugiat minima accusamus voluptas. Doloremque minus corporis ex reiciendis cupiditate dolor eaque maxime, pariatur id non velit iste accusamus doloribus. Explicabo autem obcaecati exercitationem voluptate tempore sequi asperiores vero consectetur similique, inventore fugiat iure, non ullam quas culpa deleniti ratione cumque aliquam. Illo amet, beatae quibusdam expedita, qui ipsum, dolorem, unde assumenda ut quam consequuntur voluptatem veritatis aliquid minus dolor provident numquam adipisci molestias iste sequi. Temporibus iusto reprehenderit nemo eum, in, voluptates maxime officia voluptatem nihil. Quo nesciunt voluptatem, aspernatur cupiditate quibusdam nam necessitatibus officiis facere laboriosam fuga suscipit saepe quia? Vel.
	</div>
</body>
</html>