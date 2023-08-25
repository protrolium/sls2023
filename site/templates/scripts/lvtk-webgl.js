import * as THREE from 'three'
import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';
import { OrbitControls } from 'three/addons/controls/OrbitControlsBACKUP.js';

let scene;

let camera;
let inited = false;
let mixer;
let controls;
let clock;
let renderer;
let lv;

init();

function init() {
	scene = new THREE.Scene();
	scene.background = new THREE.Color( 0xffffff );
	scene.fog = new THREE.Fog( 0xffffff, 10, 25 );


	camera = new THREE.PerspectiveCamera( 20, window.innerWidth / window.innerHeight, 0.1, 100 );
	camera.position.z = 5;
	camera.position.y = 1;

	// const hemiLight = new THREE.HemisphereLight( 0xffffff, 0x8d8d8d, 1 );
	// hemiLight.position.set( 0, 2, 0 );
	// scene.add( hemiLight );

	const ambientLight = new THREE.AmbientLight( 0xffffff, .5 ); // soft white light
			scene.add( ambientLight );

	const dirLight = new THREE.DirectionalLight( 0xffffff, .4 );
	dirLight.position.set( - 2, 5,  5 );
	dirLight.castShadow = true;
	dirLight.shadow.camera.top = 4;
	dirLight.shadow.camera.bottom = -4;
	dirLight.shadow.camera.left = -4;
	dirLight.shadow.camera.right = 4;
	dirLight.shadow.camera.near = 0.1;
	dirLight.shadow.camera.far = 40;
	scene.add( dirLight );

	const mesh = new THREE.Mesh( new THREE.PlaneGeometry( 200, 200 ), new THREE.MeshPhongMaterial( { color: 0xaaaaaa, side:THREE.BackSide } ) );
	mesh.rotation.x =  Math.PI / 2;
	mesh.receiveShadow = true;
	scene.add( mesh );

    // const renderContainer = document.getElementById('container');
	renderer = new THREE.WebGLRenderer( { antialias: true } );
	renderer.setPixelRatio( window.devicePixelRatio );
	renderer.setSize( window.innerWidth, window.innerHeight );
	renderer.shadowMap.enabled = true;
	container.appendChild( renderer.domElement );

	/*
	renderer = new THREE.WebGLRenderer( { antialias: true } );
	renderer.setPixelRatio( window.devicePixelRatio );
	renderer.setSize( window.innerWidth, window.innerHeight );
	renderer.shadowMap.enabled = true;
	renderer.useLegacyLights = false;
	renderer.domElement.style.position = "fixed";
	const container = document.getElementById( 'container' );
	container.appendChild( renderer.domElement );
	*/

	clock = new THREE.Clock();

	controls = new OrbitControls( camera, renderer.domElement );
	controls.target.set( 0, 1, 0 );
	controls.maxPolarAngle = Math.PI/2;
	controls.enableDamping = true;
	controls.dampingFactor = .01;
	controls.minDistance = .3;
	controls.maxDistance = 8;

	controls.update();

	window.addEventListener( 'resize', onWindowResize );


	const loader = new GLTFLoader();
	loader.load( extrasUrl + 'lv-3.glb', function ( gltf ) {

		lv = gltf.scene;

		gltf.scene.traverse( function ( object ) {

			if ( object.isMesh ) {
				object.castShadow = true;
				// console.log(object.material.map)
				object.material.emissiveMap = object.material.map; 
				object.material.emissive = new THREE.Color(0xffffff); 
				
			}

		} );

		mixer = new THREE.AnimationMixer( lv );
		
		mixer.clipAction( gltf.animations[ 0 ] ).play(); // idle
		
		scene.add( lv );

		inited = true;
		
		update();

	});


}

function onWindowResize() {
	camera.aspect = window.innerWidth / window.innerHeight;
	camera.updateProjectionMatrix();
	renderer.setSize( window.innerWidth, window.innerHeight );
}

function update(){
	
	requestAnimationFrame( update );
	// console.log('requestAnimiationFrame update')
	
	const delta = clock.getDelta();
	mixer.update( delta );	
	controls.update();
	renderer.render( scene, camera );

}
