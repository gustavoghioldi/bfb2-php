const requestOptions = {
    method: "GET"
  };
  
  fetch("http://localhost:5000/nomina/api/service.php", requestOptions)
    .then((response) => {
        if (!response.ok) {
            throw new Error("Network response was not ok " + response.statusText);
        }
        return response.json();
    })
    .then((data) => {
        const tableBody = document.getElementById("employeeTableBody");
        data.forEach((employee) => {
            const row = document.createElement("tr");
            row.innerHTML = `
                <td><button onclick="getNominaByDocId(${employee.doc_id})">${employee.doc_id}</button></td>
                <td>${employee.first_name}</td>
                <td>${employee.last_name}</td>
            `;
            tableBody.appendChild(row);
        });
    })
    .then((result) => console.log(result))
    .catch((error) => console.error(error));

const getNominaByDocId = (docId) => {
    const requestOptions = {
        method: "GET",
        redirect: "follow"
      };
      
      fetch(`http://localhost:5000/nomina/api/service.php?id_doc=${docId}`, requestOptions)
        .then((response) => {
            console.log(response);
            return response.json()}
        )
        .then((result) => alert(`El salario del empleado es: ${result[0].salary}`))
        .catch((error) => console.error(error));

}