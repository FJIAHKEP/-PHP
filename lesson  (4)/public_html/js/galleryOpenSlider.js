'use strict';

const gallery = {
	settings: {
		previewSelector: '.mySuperGallery',
		openedImageWrapperClass: 'galleryWrapper',
		openedImageClass: 'galleryWrapper__image',
		openedImageScreenClass: 'galleryWrapper__screen',
		openedImageCloseBtnClass: 'galleryWrapper__close',
		openedImageCloseBtnSrc: 'img/close.png'
	},

	init(userSettings = {}) {
		Object.assign(this.settings, userSettings);

		document.querySelector(this.settings.previewSelector).onclick = event => this.containerClickHandler(event);
	},

	containerClickHandler(event) {
		if (event.target.tagName !== 'IMG') {
			return;
		} else {
			this.openImage(event.target.dataset.full_image_url);
		}
	},

	openImage(src) {
		this.getScreenContainer().querySelector(`.${this.settings.openedImageClass}`).src = src;
	},

	getScreenContainer() {
		const galleryWrapper = document.querySelector(`.${this.settings.openedImageWrapperClass}`);
		if (galleryWrapper) {
			return galleryWrapper;
		} else {
			return this.createScreenContainer();
		}
	},

	createScreenContainer() {
		const galleryWraperElement = document.createElement('div');
		galleryWraperElement.classList.add(this.settings.openedImageWrapperClass);

		const galleryScreenElement = document.createElement('div');
		galleryScreenElement.classList.add(this.settings.openedImageScreenClass);
		galleryWraperElement.appendChild(galleryScreenElement);
		galleryScreenElement.onclick = () => this.close();

		const closeImageElement = document.createElement('img');
		closeImageElement.classList.add(this.settings.openedImageCloseBtnClass);
		closeImageElement.src = this.settings.openedImageCloseBtnSrc;
		closeImageElement.onclick = () => this.close();
		galleryWraperElement.appendChild(closeImageElement);

		const image = document.createElement('img');
		image.classList.add(this.settings.openedImageClass);
		galleryWraperElement.appendChild(image);

		document.body.appendChild(galleryWraperElement);

		console.log(galleryWraperElement);
		return galleryWraperElement;
	},

	close() {
		document.querySelector(`.${this.settings.openedImageWrapperClass}`).remove();
	}
};

gallery.init({previewSelector: '.gallery'});