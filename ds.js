// script.js
async function fetchMatches() {
    const response = await fetch('fetch_matches.php');
    const matches = await response.json();
    const matchesDiv = document.getElementById('matches');

    matches.forEach(match => {
        const matchDiv = document.createElement('div');
        matchDiv.innerHTML = `<h2>${match.team1} vs ${match.team2}</h2><p>Status: ${match.status}</p>`;
        matchesDiv.appendChild(matchDiv);
    });
}

fetchMatches();
