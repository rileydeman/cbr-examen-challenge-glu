document.getElementById('toggleButton').addEventListener('click', function() {
    const additionalText = document.getElementById('additionalText');
    const separatorLine = document.getElementById('separatorLine');
    
    if (additionalText.style.display === 'none' || additionalText.style.display === '') {
        additionalText.style.display = 'block';
        separatorLine.style.display = 'block';
        this.innerText = '▲';
    } else {
        additionalText.style.display = 'none';
        separatorLine.style.display = 'none';
        this.innerText = '▼';
    }
});
