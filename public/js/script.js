function logout() {
  $.ajax({
    type: "POST",
    url: "/logout",
    success: function (data, status) {
      // Handle successful logout
      location.reload("/admin");
      // Redirect or perform any other necessary actions
    },
    error: function (xhr, status, error) {
      // Handle error
      alert("An error occurred while logging out. Please try again.");
    },
  });
}
