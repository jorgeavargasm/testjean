import axios from 'axios'

const apiClient = axios.create({
	baseURL: 'http://localhost/vue_api/php/',
	withCredentials: false,
	headers : {
		Accept: 'application/json',
		'Content-Type': 'application/json'
	}
});

export default {
	Listar(){
		return apiClient.get('lista.php');
	},
	Guardar(post){
		return apiClient.post('guardar.php',post);
	},
	Editar(post){
		return apiClient.post('editar.php',post);
	},
	Delete(post){
		return apiClient.post('delete.php',post);
	}
	
}