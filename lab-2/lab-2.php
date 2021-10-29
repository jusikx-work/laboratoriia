<!DOCTYPE html>
<html lang="uk">
	<head>
		<title>Лабораторна 2</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
		<link rel="icon" href="../images/icon-transparent-black.svg">
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap');

            *{
                font-family: "e-Ukraine",sans-serif;
                font-weight: 300;
            }

            @font-face {
                font-family: 'e-Ukraine';
                src: url('../font/e-Ukraine-Light.eot');
                src: url('../font/e-Ukraine-Light.woff') format("woff"),
                        url('../font/e-Ukraine-Light.woff2') format('woff2'),
                        url('../font/e-Ukraine-Light.ttf') format('truetype');
                font-style: normal;
                font-weight: 300;
            }

			*{
				overflow: hidden;
			}

			body {
				margin: 0px;
				overflow: hidden;
			}
			
			.title{
				position: absolute;
				z-index: 100;
				font-family: 'Montserrat', sans-serif;
                border: 1.5px solid black;
                border-radius: 15px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 15px;
                font-weight: 600;
                height: 50px;
                width: 124px;
                transition: all 0.5s;
                background-color: black;
                color: white;
                left: 60px;
                top: 3px;
			}

			.logo_image{
				position: absolute;
				z-index: 1000;
				max-width: 100%;
                height: 100%;
                object-fit: cover;
			}

			label{
				display: none;
				color: black;
				font-size: 15px;
			}

			label.active{
				display: block;
			}

			.control{
				display: none;
				margin: 100px 10px 0 10px;
			}

			.control.active{
				display: block;
			}

			.logo{
				cursor: pointer;
				position: absolute;
				z-index: 100;
				left: 20px;
				top: 2%;
				width: 188px;
                height: 60px;
                overflow: hidden;
			}

			input{
				display: none;
			}

			input.active{
				display: block;
			}

			.header__burger{
				position: absolute;
				top: 3%;
				right: 20px;
				width: 30px;
                height: 20px;
				cursor: pointer;
			}

            @media (max-width:768px) {
                .header__burger{
                    top: 4%;
                }
            }

			.header__burger:before, .header__burger:after{
			transition: all 0.3s ease 0s;
            content: '';
            background: black;
            position: absolute;
            width: 100%;
            height: 2px;
            left: 0;
            }

			.header__burger:before{
            top: 0;
            }

			.header__burger:after{
            bottom: 0;
            }

			.header__burger span{
			transition: all 0.3s ease 0s;
            background: black;
            position: absolute;
            width: 100%;
            height: 2px;
            left: 0;
            top: 9px;	        
            }

			.lab{
				display: flex;
				flex-direction: column;
				align-items: flex-start;
				justify-content: space-between;
				opacity: 1;
				transition: all 1s ease 0s;
				transform: translate(400%,0);
			}

			.lab>img{
				display: none;
			}

			.lab>img.active{
				margin-bottom: 10px;
				display: block;
				max-width: 100%;
				object-fit: cover;
				align-self: center;
				
				
			}

			.lab.active{
				position: absolute;
				width: 25%;
				height: 100%;
				left: 0;
				top: 0;
				background: wheat;
				transform: translate(300%,0);
			}

			.header__burger.active:before{
			transform: rotate(45deg);
			top: 9px;
			}

			.header__burger.active:after{
				transform: rotate(-45deg);
				bottom: 9px;
			}

			.header__burger.active span{
				transform: scale(0);
			}

			.text-lab{
				display: none;
				color: black;
				padding: 0 10px;
				font-size: 15px;
				text-align: center;
			}

			.text-lab.active{
				display: block;
				margin-top: 20px;
			}

			@media (max-width: 767px) {
				.lab{
					transform: translate(100%,0);
				}
				.lab.active{
					width: 100%;
					transform: translate(0%,0);
				}
			}

		</style>
	</head>

	<body>
		<div class="lab">
			<div class="control">
				<label>Розмір атома</label>
				<input type="range" min="0.128" max="0.256" step="0.001" value="" id="polzun" oninput="func()">
			</div>
			<div class="text-lab">
				Планетарна модель атома або модель Резерфорда — історична модель будови атома, яку запропонував Ернест Резерфорд внаслідок експерименту з розсіяння альфа-частинок.	За цією моделлю атом складається із невеликого додатньо зарядженого ядра, в якому зосереджена майже вся маса атома, навколо якого рухаються електрони, подібно до того, як планети рухаються навколо Сонця.		</div>
			<img src="../images/lab-1.png" alt="" class="gg-img">
		</div>
		<a class="logo" href="../index.php">
			<img src="../images/icon-transparent-black.svg" alt="header_logo" class="logo_image">
			<div class="title">Лабораторія</div>
		</a>
		<div class="header__burger">
			<span></span>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
		<script src="../js/script.js"></script>


		<script src="../build/three.js"></script>

		<script src="../js/controls/OrbitControls.js"></script>
		<script src="../js/loaders/GLTFLoader.js"></script>

		<script src="../js/pmrem/PMREMGenerator.js"></script>
		<script src="../js/pmrem/PMREMCubeUVPacker.js"></script>

		<script src="../js/WebGL.js"></script>
		<script src="../js/libs/stats.min.js"></script>
		<script src="https://code.createjs.com/1.0.0/tweenjs.min.js"></script>
		

		<script>



			
			


			if ( WEBGL.isWebGLAvailable() === false ) {

				document.body.appendChild( WEBGL.getWebGLErrorMessage() );

			}

			var container, stats, controls;
			var camera, scene, renderer;
			let myFuckenDisc;
			init();
			animate();

			
			

			function init() {


				container = document.createElement( 'div' );
				document.body.appendChild( container );

				camera = new THREE.PerspectiveCamera( 45, window.innerWidth / window.innerHeight, 0.128, 20 );
				camera.position.set( - 1.8, 0.9, 2.7 );


				scene = new THREE.Scene();


				

				var urls = [ '4-1.jpg', '4-2.jpg', '4-3.jpg', '4-4.jpg', '4-5.jpg', '4-6.jpg' ];
				var loader = new THREE.CubeTextureLoader().setPath( '../textures/cube/skybox/' );
				loader.load( urls, function ( texture ) {

					var pmremGenerator = new THREE.PMREMGenerator( texture );
					pmremGenerator.update( renderer );

					var pmremCubeUVPacker = new THREE.PMREMCubeUVPacker( pmremGenerator.cubeLods );
					pmremCubeUVPacker.update( renderer );

					var envMap = pmremCubeUVPacker.CubeUVRenderTarget.texture;

					// model

					var loader = new THREE.GLTFLoader().setPath( '../models/' );
					loader.load( 'atom-1.glb', function ( gltf ) {

						gltf.scene.traverse( function ( child ) {

							if ( child.isMesh ) {

								child.material.envMap = envMap;
								
							}

						} );

						scene.add( gltf.scene );
						myFuckenDisc_3 = gltf.scene;
						gltf.scene.scale.set(0.128, 0.128, 0.128);
						gltf.scene.position.set(-0.125,0,0);
						gltf.scene.rotation.y += 3.5;

						
						
						
						
					} );


					loader.load( 'atom-2.glb', function ( gltf2 ) {

					gltf2.scene.traverse( function ( child ) {

						if ( child.isMesh ) {

							child.material.envMap = envMap;
							
						}

					} );
					

					

					scene.add( gltf2.scene );
					myFuckenDisc = gltf2.scene;
					gltf2.scene.scale.set(0.128, 0.128, 0.128);
					gltf2.scene.position.set(-0.125,0,0);
					gltf2.scene.rotation.y += 3.5;

					

					
					} );






					
					loader.load( 'atom-3.glb', function ( gltf3 ) {

					gltf3.scene.traverse( function ( child ) {

						if ( child.isMesh ) {

							child.material.envMap = envMap;

						}

					} );

					scene.add( gltf3.scene );
					myFuckenDisc_1 = gltf3.scene;
					gltf3.scene.scale.set(0.128, 0.128, 0.128);
					gltf3.scene.position.set(-0.125,0,0);
					gltf3.scene.rotation.y += 3.5;
					} );



					loader.load( 'atom-4.glb', function ( gltf4 ) {

					gltf4.scene.traverse( function ( child ) {

						if ( child.isMesh ) {

							child.material.envMap = envMap;

						}

					} );

					scene.add( gltf4.scene );
					myFuckenDisc_2 = gltf4.scene;
					gltf4.scene.scale.set(0.128, 0.128, 0.128);
					gltf4.scene.position.set(-0.125,0,0);
					gltf4.scene.rotation.y += 3.5;
					} );
					
					
					
			








					pmremGenerator.dispose();
					pmremCubeUVPacker.dispose();

					scene.background = texture;

				} );

				renderer = new THREE.WebGLRenderer( { antialias: true } );
				renderer.setPixelRatio( window.devicePixelRatio );
				renderer.setSize( window.innerWidth, window.innerHeight );
				renderer.gammaOutput = true;
				container.appendChild( renderer.domElement );

				controls = new THREE.OrbitControls( camera, renderer.domElement);
				controls.target.set( 0, - 0.2, - 0.2 );
				controls.update();

				window.addEventListener( 'resize', onWindowResize, false );

				// stats
				stats = new Stats();
				container.appendChild( stats.dom );

			}

			function onWindowResize() {

				camera.aspect = window.innerWidth / window.innerHeight;
				camera.updateProjectionMatrix();

				renderer.setSize( window.innerWidth, window.innerHeight );

			}

			//
			
			function animate() {
				

				requestAnimationFrame( animate );

				renderer.render( scene, camera );

				stats.update();

				

				if(myFuckenDisc) {
					myFuckenDisc.rotation.y += 0.01;
				};
				if(myFuckenDisc_1) {
					myFuckenDisc_1.rotation.x += 0.01;
				};
				if(myFuckenDisc_2) {
					myFuckenDisc_2.rotation.x += 0.01;
				};
				
				
				
				
				
			}

			function func(){
				let polzun = document.getElementById('polzun').value;
				myFuckenDisc_3.scale.set(polzun,polzun,polzun);
				myFuckenDisc.scale.set(polzun,polzun,polzun);
				myFuckenDisc_1.scale.set(polzun,polzun,polzun);
				myFuckenDisc_2.scale.set(polzun,polzun,polzun);
				}

		</script>

	</body>
</html>