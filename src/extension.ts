import type { ExtensionContext } from "vscode";
import { getManager, initializeGlobals } from "./common/global";
import { DDEVManager } from "./ddev/ddevManager";

export function activate(context: ExtensionContext) {
	initializeGlobals(context);

	const controller = new DDEVManager();
	controller.activate();
}

export function deactivate() {
	const controller = getManager();
	if (controller) {
		controller.deactivate();
	}
}
