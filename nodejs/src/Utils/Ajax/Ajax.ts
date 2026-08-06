export class Ajax {
	/**
	 * Performs a GET request.
	 * @param endpoint {string} The endpoint URL.
	 * @param params {Record<string, any>} An object containing query parameters.
	 * @returns {Promise<any>} The response from the GET request.
	 */
	async get(endpoint: string, params: Record<string, any> = {}): Promise<any> {
		const queryParams = new URLSearchParams(params).toString();
		const response = await fetch(`${endpoint}?${queryParams}`, {
			method: "GET",
		});
		return response.json();
	}

	/**
	 * Performs a POST request.
	 * @param endpoint {string} The endpoint URL.
	 * @param body {Record<string, any>} The body of the POST request.
	 * @param returnResult {boolean} Optional. Whether to return the response body or not. Defaults to true.
	 * @returns {Promise<any>} The response from the POST request if returnResult is true; otherwise, undefined.
	 */
	async post(
		endpoint: string,
		body: Record<string, any>,
		returnResult: boolean = true
	): Promise<any> {
		const response = await fetch(endpoint, {
			method: "POST",
			headers: {
				"Content-Type": "application/json",
			},
			body: JSON.stringify(body),
		});
		if (returnResult) {
			return response.json();
		}
	}

	/**
	 * Performs a POST request with form data.
	 * @param endpoint {string} The endpoint URL.
	 * @param body {Record<string, any>} The body of the POST request, sent as form data.
	 * @param returnResult {boolean} Optional. Whether to return the response body or not. Defaults to true.
	 * @returns {Promise<any>} The response from the POST request if returnResult is true; otherwise, undefined.
	 */
	async postFormData(
		endpoint: string,
		body: Record<string, any>,
		returnResult: boolean = true
	): Promise<any> {
		const formData = new URLSearchParams();
		Object.keys(body).forEach((key) => formData.append(key, body[key]));

		const response = await fetch(endpoint, {
			method: "POST",
			headers: {
				"Content-Type": "application/x-www-form-urlencoded",
			},
			body: formData.toString(),
		});
		if (returnResult) {
			return response.json();
		}
	}
}
