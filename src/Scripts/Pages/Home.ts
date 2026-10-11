document.addEventListener("DOMContentLoaded", () => {

	const carbonBadge = document.getElementById("wcb");
	if (carbonBadge) {
		const updateBadgeVisibility = () => {
			const result = carbonBadge.querySelector("#wcb_g")?.textContent?.trim() ?? "";
			carbonBadge.hidden = !/^\d+(?:\.\d+)?g of CO2\/view$/.test(result);
		};
		new MutationObserver(updateBadgeVisibility).observe(carbonBadge, {
			childList: true,
			characterData: true,
			subtree: true,
		});
		updateBadgeVisibility();
	}
});
