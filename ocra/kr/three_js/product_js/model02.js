import * as THREE from 'three';
import { GLTFLoader } from 'GLTFLoader';
import { OrbitControls } from "https://unpkg.com/three@0.126.1/examples/jsm/controls/OrbitControls.js";
import { RGBELoader } from 'https://cdn.jsdelivr.net/npm/three@0.150.0/examples/jsm/loaders/RGBELoader.js';

let camera, scene, renderer, controls;
let model;
let rotateModel = true; // Flag to control model rotation


init();
render();

function init() {
  const container = document.querySelector('.canvas-wrap');
  
  // 제품 첫 시작 포인트
  camera = new THREE.PerspectiveCamera(20, container.clientWidth / container.clientHeight, 0.1, 1000);
  camera.position.set(3, 3, 49);
  scene = new THREE.Scene();

  // 조명 설정 (DirectionalLight 사용)
  const directionalLight1 = new THREE.DirectionalLight(0xffffff, 1);
  directionalLight1.position.set(3.092,3.757,3.719);    
  scene.add(directionalLight1);
  const directionalLight2 = new THREE.DirectionalLight(0xffffff, 1);
  directionalLight2.position.set(-2.168,2.256,-0.300);
  scene.add(directionalLight2);
  const directionalLight3 = new THREE.DirectionalLight(0xffffff, 1);
  directionalLight3.position.set(1.704,1.701,-2.909);
  scene.add(directionalLight3);
  
  renderer = new THREE.WebGLRenderer({
      alpha: true,
      antialias: false
  });

  renderer.outputEncoding = THREE.sRGBEncoding;
  renderer.setPixelRatio(window.devicePixelRatio);
  renderer.setSize(container.clientWidth, container.clientHeight);
  renderer.toneMapping = THREE.ACESFilmicToneMapping;
  renderer.toneMappingExposure = .6;
  renderer.setAnimationLoop( animationLoop );    
  container.appendChild(renderer.domElement);

   // 그림자 활성화 및 설정
  renderer.shadowMap.enabled = false;
  renderer.shadowMap.type = THREE.PCFSoftShadowMap; // 그림자 품질 설정

  controls = new OrbitControls(camera, renderer.domElement);
  controls.addEventListener('change', render);

  // 오브젝트 좌표값 출력
  controls.addEventListener( "change", event => {  
    console.log( controls.object.position ); 
  });
  controls.enablePan = false; // 팬 기능 비활성화
  controls.enableZoom = false; // 확대/축소 허용
  controls.enableDamping = true; // 부드러운 제어를 위한 damping 활성화
  controls.dampingFactor = 0.07; // damping의 정도 설정
  controls.minPolarAngle = 0;
  controls.maxPolarAngle = Math.PI / 2; // 카메라가 수평선 아래로 이동하지 않도록 제한
  controls.rotateSpeed = 0.5;
  //controls.minDistance = 2; // 카메라와 큐브 사이의 최소 거리
  //controls.maxDistance = 10; // 카메라와 큐브 사이의 최대 거리
  controls.target.set(0, 0, 0);
  controls.update();
  
  const loader = new GLTFLoader().setPath('./three_js/model/');
  const rgbeLoader = new RGBELoader();
  // 첫 번째 HDR (환경용)
  rgbeLoader.load('./three_js/model/environment.hdr',function (texture) {      
    texture.mapping = THREE.EquirectangularReflectionMapping;      
    scene.environment = texture;
    // 오브젝트 설정
    loader.load('model02.gltf?ver=1', function (gltf) {

      model = gltf.scene;
      model.scale.set(1,1,1);

      // 모델 중심 계산 및 이동
      const box = new THREE.Box3().setFromObject(model);
      const center = new THREE.Vector3();
      box.getCenter(center);
      model.position.sub(center); // 중심점을 원점으로 이동      
      scene.add(model);
      
      // 모델 그림자 설정
      model.traverse(function (child) {
        if (child.isMesh) {
          child.castShadow = true;
          child.receiveShadow = true;
        }
      });
      camera.lookAt(new THREE.Vector3(0, 0, 0)); // 중심 바라보게 설정
      render();
      animate();
    });    
  });   

  function animationLoop(t) {
    controls.update();
    renderer.render(scene, camera);
  }
}

function animate() {
  requestAnimationFrame(animate);  
  TWEEN.update();
  controls.update();
  render();
}

function render() {	
	renderer.render(scene, camera);    
}

// 윈도우 리사이즈 시 반응형
window.addEventListener('resize', () => {
  const container = document.querySelector('.canvas-wrap');
  renderer.setSize(container.clientWidth, container.clientHeight);
  camera.aspect = container.clientWidth / container.clientHeight;
  camera.updateProjectionMatrix();
  render();
});