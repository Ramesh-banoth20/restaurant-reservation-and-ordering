function validateAndSubmit()
{
    let tracking_key = document.getElementById('tracking_key').value;
    let estimated_ready_time = document.getElementById('ERT').value;
    let preparation_status = document.getElementById('preparation_status').value;

    if (tracking_key === '') {
        alert('Tracking key cannot be empty');
        return false;
    }

    if (estimated_ready_time === '') {
        alert('Please enter estimated ready time');
        return false;
    }

    if (preparation_status === '') {
        alert('Please select preparation status');
        return false;
    }

    return true;
}
