async function updateData() {
  try {
    const response = await fetch('data.php');
    const data = await response.json();

    document.getElementById('speed').textContent = data.speed;
    document.getElementById('rpm').textContent = data.rpm;
    document.getElementById('gear').textContent = data.gear;
    document.getElementById('temp').textContent = data.temp;

    console.log("Data updated:", data);
  } catch (error) {
    console.error("Error fetching data:", error);
  }
}

setInterval(updateData, 10000);
