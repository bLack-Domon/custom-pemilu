function updateTime() {
 fetch('{{ route('get.time') }}')
     .then(response => response.json())
     .then(data => {
         document.getElementById('time').textContent = data.time;
     });
}

setInterval(updateTime, 1000); // Refresh every second