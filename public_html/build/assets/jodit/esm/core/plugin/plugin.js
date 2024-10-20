/*!
 * Jodit Editor (https://xdsoft.net/jodit/)
 * Released under MIT see LICENSE.txt in the project root for license information.
 * Copyright (c) 2013-2023 Valeriy Chupurnov. All rights reserved. https://xdsoft.net
 */
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function")
        r = Reflect.decorate(decorators, target, key, desc);
    else
        for (var i = decorators.length - 1; i >= 0; i--)
            if (d = decorators[i])
                r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
import { ViewComponent, STATUSES } from "../component/index.js";
import { autobind } from "../decorators/index.js";
import { isJoditObject } from "../helpers/checker/is-jodit-object.js";
export class Plugin extends ViewComponent {
    /** @override */
    className() {
        return '';
    }
    constructor(jodit) {
        super(jodit);
        /** @override */
        this.buttons = [];
        /**
         * Plugin have CSS style and it should be loaded
         */
        this.hasStyle = false;
        jodit.e
            .on('afterPluginSystemInit', () => {
            if (isJoditObject(jodit)) {
                this.buttons?.forEach(btn => {
                    jodit.registerButton(btn);
                });
            }
        })
            .on('afterInit', () => {
            this.setStatus(STATUSES.ready);
            this.afterInit(jodit);
        })
            .on('beforeDestruct', this.destruct);
    }
    init(jodit) {
        // empty
    }
    destruct() {
        if (this.isReady) {
            this.setStatus(STATUSES.beforeDestruct);
            const { j } = this;
            if (isJoditObject(j)) {
                this.buttons?.forEach(btn => {
                    j?.unregisterButton(btn);
                });
            }
            this.j?.events?.off('beforeDestruct', this.destruct);
            this.beforeDestruct(this.j);
            super.destruct();
        }
    }
}
Plugin.requires = [];
__decorate([
    autobind
], Plugin.prototype, "destruct", null);
