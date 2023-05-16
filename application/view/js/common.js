
function chkDuplicationId() {
	const id = document.getElementById('id');

	const url = "/api/user?id=" + id.value;

	// API
	fetch(url)
	.then(data => {
		// Response Status 확인 (200번 외에는 에러 처리)
		if(data.status !== 200) {
			throw new Error(data.status + ' : API Response Error' );
		}
		return data.json();
	})
	.then(apiData => {
		const idspan = document.getElementById('errMsgId');
		if(apiData["flg"] === "1") {
			idspan.innerHTML = apiData["msg"];
		} else {
			idspan.innerHTML = "";
		}
	})
	// 에러는 alert로 처리
	.catch(error => alert(error.message)); 

}