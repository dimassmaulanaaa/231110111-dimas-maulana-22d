<!-- Discard Confrim -->
<div
	class="modal fade"
	id="discardConfirmModal"
	tabindex="-1"
	aria-labelledby="discardConfirmModalLabel"
	aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header text-bg-primary text-white">
				<h5 class="modal-title" id="discardConfirmModalLabel">
					<i class="fas fa-exclamation-triangle me-2"></i>Confirm Discard
				</h5>
				<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body pb-2">
				<p>All unsaved changes will be permanently lost. Are you sure?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Keep Editing</button>
				<a href="index.php" class="btn btn-outline-secondary" id="confirmDiscard">Discard Anyway</a>
			</div>
		</div>
	</div>
</div>

<!-- Save Confirm -->
<div class="modal fade" id="saveConfirmModal" tabindex="-1" aria-labelledby="saveConfirmModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h5 class="modal-title" id="saveConfirmModalLabel"><i class="fas fa-save me-2"></i>Confirm Save</h5>
				<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body pb-2">
				<p>Changes cannot be undone after saving. Keep these changes?</p>
			</div>
			<div class="modal-footer">
				<button
					type="button"
					class="btn btn-outline-secondary"
					data-bs-dismiss="modal">
					Keep Editing
				</button>
				<button
					type="submit"
					class="btn btn-primary"
					id="confirmSave"
					name="submit">
					Save Changes
				</button>
			</div>
		</div>
	</div>
</div>